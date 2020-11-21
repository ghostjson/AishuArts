<?php

use App\Http\Controllers\Shop\ShopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('client.home');
})->name('client.home');

Route::get('/shop', [ShopController::class, 'shopPage'])->name('client.shop');

Route::get('/product/{product}', [ShopController::class, 'productPage'])->name('client.product');

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

Route::get('/login', function () {
    return view('client.home');
})->name('client.login');

Route::get('/register', function () {
    return view('client.home');
})->name('client.register');

