<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;

class AuthPagesController extends Controller
{

    public function loginPage()
    {
        return view('client.login');
    }
}
