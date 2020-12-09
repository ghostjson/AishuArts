<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;

class AuthPagesController extends Controller
{

    public function loginPage()
    {
        if(is_null(auth()->user())){
            return view('client.login');
        }else{
            return redirect()->route('client.home');
        }
    }
}
