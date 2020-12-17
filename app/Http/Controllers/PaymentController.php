<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentSucessHook;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\Order;
use App\Models\PaymentDetails;
use App\Modules\ShiprocketAPI;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{


    public function updatePaymentCredentials(UpdatePaymentRequest $request)
    {
        try{
            $credentials = $request->validated();
            settingsUpdate('cashfree-secret-key', $credentials['cashfree-secret-key']);
            settingsUpdate('cashfree-app-id', $credentials['cashfree-app-id']);

            return redirect()->back()->with('Successfully updated');
        }catch (\Exception $exception)
        {
            Log::error($exception);
            return redirect()->back()->withErrors('Error in updating');
        }

    }

    public function paymentSuccess(PaymentSucessHook $request, ShiprocketAPI $shiprocketAPI)
    {
        $payment_details = PaymentDetails::updateOrCreate(
            ['order_id' => $request->input('orderId')],
            [
                'order_amount' => $request->input('orderAmount'),
                'reference_id' => $request->input('referenceId'),
                'status' => $request->input('txStatus'),
                'payment_method' => $request->input('paymentMode'),
                'payment_time' => $request->input('txTime'),
            ]
        );

        $order = Order::find($request->input('orderId'));
        $response = $shiprocketAPI->createOrder($order);

        if (!$response) return redirect()->back()->withErrors(['Error placing order, contact site owner']);

        $response = (array)$response;

        $order->shiprocket_order_id = $response['order_id'];
        $order->shiprocket_shipment_id = $response['shipment_id'];
        $order->shiprocket_status = $response['status'];

        $order->save();


        session()->forget('cart.products');

        return redirect()->route('client.checkout_completed',$request->input('orderId'));
    }
}
