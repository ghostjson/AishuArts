<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopPagesController extends Controller
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

    public function cartPage(Request $request)
    {

        $ids = $request->session()->get('cart.products');

        if(is_null($ids)){
            $products = [];
        }else{
            $products = Product::find($ids);
        }
        return view('client.cart', compact('products'));
    }

    public function checkoutPage()
    {
        return view('client.checkout');
    }

    public function checkoutCompletePage()
    {
        return view('client.checkout_completed');
    }
}
