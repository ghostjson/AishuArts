<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Product;
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
}
