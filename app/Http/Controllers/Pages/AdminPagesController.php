<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
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
}
