<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class ClientPagesController extends Controller
{
    public function homePage()
    {
        $featured = Product::where('featured', 1)->get();
        return view('client.home', compact('featured'));
    }

    public function profilePage()
    {
        return view('client.profile');
    }

    public function ordersPage()
    {
        $orders = Order::where('user_id', auth()->id())->orderBy('created_at', 'desc')
            ->latest()->limit(20)->get();
        return view('client.orders', compact('orders'));
    }
}
