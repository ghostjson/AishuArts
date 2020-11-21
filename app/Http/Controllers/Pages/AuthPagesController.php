<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthPagesController extends Controller
{
    public function loginPage()
    {
        return view('client.login');
    }
}
