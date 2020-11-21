<?php

use App\Http\Controllers\Managers\AuthController;
use App\Http\Controllers\Pages\AuthPagesController;
use App\Http\Controllers\Pages\ShopPagesController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('client.home');
})->name('client.home');

Route::get('/shop', [ShopPagesController::class, 'shopPage'])->name('client.shop');

Route::get('/product/{product}', [ShopPagesController::class, 'productPage'])->name('client.product');

Route::get('/cart', function () {
    return view('client.cart');
})->name('client.cart');

Route::get('/checkout', function () {
    return view('client.checkout');
})->name('client.checkout');

Route::get('/checkout-complete', function () {
    return view('client.checkout_completed');
})->name('client.checkout_completed');

Route::get('/about', function () {
    return view('client.home');
})->name('client.about');


// Authentication
Route::get('/login', [AuthPagesController::class, 'loginPage'])->name('client.login');

Route::post('/login', [AuthController::class, 'login'])->name('client.login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('client.logout');

Route::get('/register', function () {
    return view('client.home');
})->name('client.register');

