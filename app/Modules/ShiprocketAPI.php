<?php

namespace App\Modules;


use App\Models\Product;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Log;

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
                    'weight' => 10
                ]
            ]);
            return json_decode($request->getBody()->getContents());

        } catch (GuzzleException $e) {
            Log::error($e);
            return false;
        }

    }

}
