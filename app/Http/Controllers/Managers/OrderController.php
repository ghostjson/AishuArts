<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateOrderRequest;
use App\Models\Order;
use App\Modules\ShiprocketAPI;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function placeOrder(CreateOrderRequest $request, ShiprocketAPI $shiprocketAPI)
    {
        $billing = $request->validated();
        $billing['products'] = json_encode(session('cart.products'));
        $billing['status'] = 'processing';

        $order = Order::create($billing);

        $shiprocketAPI->createOrder($order);

        session()->forget('cart.products');

        return redirect()->route('client.home');
    }
}
