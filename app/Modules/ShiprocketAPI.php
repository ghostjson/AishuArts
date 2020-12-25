<?php

namespace App\Modules;


use App\Events\OrderDelivered;
use App\Mail\OrderCancelledMail;
use App\Mail\OrderConfirmMail;
use App\Mail\OrderDeliveredMail;
use App\Mail\OrderShippedMail;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ShiprocketAPI
{

    private $client;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => settings('shiprocket-api-endpoint')]);
    }

    public function refreshToken($email, $password)
    {
        try {
            $request = $this->client->post('auth/login', [
                'form_params' => [
                    'email' => $email,
                    'password' => $password
                ]
            ]);
            $response = $request->getBody()->getContents();
            $token = (json_decode($response))->token;

            settingsUpdate('shiprocket-token', $token);

        } catch (GuzzleException $e) {
            Log::error($e);
        }
    }

    /**
     * Create a shiprocket order
     * @param $order
     * @return false|string
     */
    public function createOrder($order)
    {
        $order_items = [];
        $total_price = 0;

        $products = Product::find(json_decode($order->products));

        $item = [];
        foreach ($products as $product) {
            $item['name'] = $product->name;
            $item['sku'] = 'sku_' . $product->id;
            $item['units'] = 1;
            $item['selling_price'] = $product->price;
            $item['discount'] = 0;
            $item['tax'] = 0;
            $item['hsn'] = 970110;

            $total_price += $product->price;

            array_push($order_items, $item);
        }

        try {

            $request = $this->client->post('orders/create/adhoc', [
                'headers' => [
                    'Authorization' => 'Bearer ' . settings('shiprocket-token')
                ],
                'form_params' => [
                    'order_id' => $order->order_id,
                    'order_date' => Carbon::parse($order->created_at)->format('Y-m-d'),
                    'pickup_location' => settings('shiprocket-pickup-location'),
                    'billing_customer_name' => $order->billing_customer_name,
                    'billing_address' => $order->billing_address,
                    'billing_address_2' => $order->billing_address_2,
                    'billing_city' => $order->billing_city,
                    'billing_pincode' => $order->billing_pincode,
                    'billing_state' => $order->billing_state,
                    'billing_country' => $order->billing_country,
                    'billing_last_name' => '',
                    'billing_email' => $order->billing_email,
                    'billing_phone' => $order->billing_phone,
                    'shipping_is_billing' => true,
                    'order_items' => $order_items,
                    'payment_method' => $order->payment_method,
                    'sub_total' => $total_price,
                    'length' => 10,
                    'height' => 10,
                    'breadth' => 10,
                    'weight' => 0.5
                ]
            ]);
            return json_decode($request->getBody()->getContents());

        } catch (GuzzleException $e) {
            Log::error($e);
            return false;
        }

    }

    public function updateOrdersStatus()
    {
        $orders = Order::where('tracking', '!=', 'Delivered')
            ->where('tracking', '!=', 'Canceled')->get();

        foreach ($orders as $order) {
            if (!is_null($order->shiprocket_order_id)) {
                $order_id = $order->shiprocket_order_id;
                try {

                    $request2 = $this->client->get('/v1/external/courier/track/shipment/' . $order_id, [
                        'headers' => [
                            'Authorization' => 'Bearer ' . settings('shiprocket-token')
                        ],
                    ]);

                    $data2 = (json_decode($request2->getBody()->getContents(), true));

                    $track = $data2['tracking_data']['track_status'];
                    switch ($track) {
                        case 0:
                            $order->tracking = 'Pending';
                            break;
                        case 1:
                        case 2:
                        case 3:
                        case 4:
                        case 5:
                            if($order->tracking !='Confirmed'){
                                $order->tracking = 'Confirmed';
                                Mail::to($order->user)->send(new OrderConfirmMail($order));
                            }
                            break;
                        case 6:
                        case 17:
                            if($order->tracking != 'Shipped'){
                                $order->tracking = 'Shipped';
                                Mail::to($order->user)->send(new OrderShippedMail($order));
                            }
                        break;
                        case 7:
                            if($order->tracking != 'Delivered'){
                                $order->tracking = 'Delivered';
                                Mail::to($order->user)->send(new OrderDeliveredMail($order));
                                OrderDelivered::dispatch($order);
                            }
                            break;
                        case 8:
                            if($order->tracking != 'Canceled'){
                                $order->tracking = 'Canceled';
                                Mail::to($order->user)->send(new OrderCancelledMail($order));
                            }
                            break;

                    }

                    $order->save();

                } catch (GuzzleException $e) {
                    Log::error($e);
                }

            }
        }

//
    }

}
