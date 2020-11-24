<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;

class AdminPagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function productsPage()
    {
        $products = Product::all();
        return view('admin.products', compact('products'));
    }

    public function createProductPage()
    {
        return view('admin.products.new');
    }

    public function editProductPage(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    protected function shippingPage()
    {
        return view('admin.shipping');
    }

    public function ordersPage()
    {
        $orders = Order::all();
        return view('admin.orders', compact('orders'));
    }

    public function orderView(Order $order)
    {
        $products = Product::find(json_decode($order->products));

        return view('admin.orders_view', compact(['order', 'products']));
    }

    public function featuredPage()
    {
        return view('admin.products_featured');
    }
}
