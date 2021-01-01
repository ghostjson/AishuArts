<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{

    public function login(LoginRequest $request)
    {
        if(Auth::attempt($request->validated()))
        {
            return \auth()->user()->role == 'admin' ?
                redirect()->route('admin.dashboard') : redirect()->intended()
                ;
        }else{
            return redirect()->back()->withErrors(['Email or password is incorrect']);
        }
    }

    public function register(RegisterUserRequest $request)
    {
        $user = new User;
        $user->name = $request->input('name');
        $user->role = 'user';
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));

        try {
            $user->save();

            Auth::login($user);

            return redirect()->route('client.home');
        }catch (\Exception $exception){
            Log::error($exception);
            return redirect()->back()->withErrors(['Registration failed, please contact us']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('client.home');
    }

    public function profileUpdate(ProfileUpdateRequest $request)
    {
        try {
            User::find(\auth()->user()->id)->update($request->validated());
            return redirect()->back();
        }catch (\Exception $exception){
            Log::error($exception);
            return redirect()->back()->withErrors(['Error Updating Profile']);
        }

    }
}
