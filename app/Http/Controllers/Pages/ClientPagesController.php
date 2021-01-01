<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactSendRequest;
use App\Mail\SendContactMail;
use App\Models\Order;
use App\Models\Page;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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



    public function termsPage()
    {
        return view('client.terms');
    }

    public function contactPage()
    {
        $page = Page::getPage('contact_page');
        return view('client.contact', compact('page'));
    }

    public function contactSend(ContactSendRequest $request)
    {
        $page = Page::getPage('contact_page');
        Mail::to($page->content->contact_email)->queue(new SendContactMail($request->validated()));
        return redirect()->back()->with(['successfully send message']);
    }

    public function searchPage(Request $request)
    {
        $query = $request->get('query');

        $products = Product::where('name', 'LIKE','%' . $query . '%')->get();

        return view('client.search_results', compact('products'));
    }
}
