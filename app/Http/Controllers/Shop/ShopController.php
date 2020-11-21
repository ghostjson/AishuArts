<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shopPage()
    {
        $products = Product::all();
        return view('client.shop', compact('products'));
    }

    public function productPage(Product $product)
    {
        return view('client.product', compact('product'));
    }
}
