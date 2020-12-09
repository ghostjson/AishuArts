<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateOrderRequest;
use App\Models\Order;
use App\Models\User;
use App\Modules\ShiprocketAPI;

class OrderController extends Controller
{
    public function placeOrder(CreateOrderRequest $request, ShiprocketAPI $shiprocketAPI)
    {
        $user = User::find(auth()->user()->id);
        $user->address1 = $request->input('billing_address');
        $user->address2 = $request->input('billing_address_2');
        $user->city = $request->input('billing_city');
        $user->state = $request->input('billing_state');
        $user->zip = $request->input('billing_pincode');
        $user->phone = $request->input('billing_phone');

        $user->save();


        $billing = $request->validated();
        $billing['products'] = json_encode(session('cart.products'));
        $billing['status'] = 'processing';
        $billing['billing_country'] = 'India'; #change if want international shipping
        $billing['user_id'] = auth()->id();


        $order = Order::create($billing);

        $shiprocketAPI->createOrder($order);

        session()->forget('cart.products');

        return redirect()->route('client.home');
    }

    public function cancelOrder($order_id)
    {

    }
}
