<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactSendRequest;
use App\Models\Order;
use App\Models\Page;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClientPagesController extends Controller
{
    public function homePage()
    {
        $featured = Product::where('featured', 1)
            ->where('is_active', true)
            ->get();
        return view('client.home', compact('featured'));
    }

    public function aboutPage()
    {
        $page = Page::getPage('about_page');
        return view('client.about', compact('page'));
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

    public function reviewPage(Product $product)
    {
        if($product->canReview()){
            return view('client.review', compact('product'));
        }else{
            return redirect()->route('client.product', $product->id);
        }
    }

    public function contactPage()
    {
        $page = Page::getPage('contact_page');
        return view('client.contact', compact('page'));
    }

    public function contactSend(ContactSendRequest $request)
    {
        //TODO
    }
}
