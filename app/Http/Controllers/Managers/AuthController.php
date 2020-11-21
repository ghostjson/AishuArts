<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(LoginRequest $request)
    {
        if(Auth::attempt($request->validated()))
        {
            return \auth()->user()->role == 'admin' ?
                redirect()->route('admin.dashboard') : redirect()->route('client.home')
                ;
        }else{
            return redirect()->back()->withErrors(['Email or password is incorrect']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('client.home');
    }
}
