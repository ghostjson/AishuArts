<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
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

    public function OrdersCurrentPage()
    {
        $orders = Order::where('tracking', '!=' ,'Delivered')
            ->where('tracking', '!=', 'Cancelled')->latest()->get();
        $recent_delivery = Order::where('tracking', '=','Delivered')
            ->where('created_at', '>=', Carbon::today()->subDays(7))->get();
        $orders = $orders->merge($recent_delivery);
        return view('client.orders_current', compact('orders'));
    }

    public function OrdersHistoryPage()
    {
        $orders = Order::where('user_id', auth()->id())->orderBy('created_at', 'desc')
            ->latest()->limit(20)->get();

        return view('client.orders_history', compact('orders'));
    }
}
