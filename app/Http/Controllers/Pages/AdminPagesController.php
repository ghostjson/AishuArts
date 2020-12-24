<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
        $orders = Order::limit(5)->get();
        $products = Product::where('featured', 1)->get();

//        dd($products);
        return view('admin.dashboard', compact(['orders', 'products']));
    }

    public function productsPage()
    {
        $products = Product::all();
        return view('admin.products', compact('products'));
    }

    public function createProductPage()
    {
        $categories = Category::all();
        return view('admin.products.new', compact('categories'));
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

    public function categoryPage()
    {
        $categories = Category::all();
        return view('admin.category', compact('categories'));
    }

    public function paymentPage()
    {
        return view('admin.payment');
    }
}
