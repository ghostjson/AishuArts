<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

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

    public function registerPage()
    {
        if(is_null(auth()->user())){
            return view('client.register');
        }else{
            return redirect()->route('client.home');
        }
    }
}
