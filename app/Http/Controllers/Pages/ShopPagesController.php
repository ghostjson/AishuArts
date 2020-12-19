<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\CanReviews;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopPagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['checkoutPage']);
    }

    public function shopPage()
    {
        $products = Product::all();
        return view('client.shop', compact('products'));
    }

    public function productPage(Product $product)
    {
        $can_user_review = $this->canReview($product->id);
        return view('client.product', compact(['product', 'can_user_review']));
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

    public function checkoutPage(Request $request)
    {

        $ids = $request->session()->get('cart.products');

        if(is_null($ids)){
            return redirect()->back();
        }else{
            $products = Product::find($ids);
        }

        return view('client.checkout', compact(['products']));
    }

    public function checkoutCompletePage(Order $order)
    {
        return view('client.checkout_completed', compact('order'));
    }

    private function canReview(int $product_id){
        if(CanReviews::where('product_id', $product_id)
            ->where('user_id', auth()->id())->exists()){
            return true;
        }else{
            return false;
        }
    }

}
