<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request, Product $product)
    {
        $request->session()->push('cart.products', $product->id);
        return redirect()->back();
    }

    public function removeFromCart(Request $request, Product $product)
    {
        $products =  $request->session()->get('cart.products');


        foreach ($products as $index => $pr)
        {
            if($pr == $product->id){
                unset($products[$index]);
            }
        }

        $request->session()->put('cart.products', $products);
        return redirect()->back();
    }

    public function clearCart()
    {
        session()->forget('cart.products');
        return redirect()->back();
    }
}
