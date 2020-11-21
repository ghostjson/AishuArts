<?php

use App\Http\Controllers\Managers\AuthController;
use App\Http\Controllers\Managers\CartController;
use App\Http\Controllers\Pages\AuthPagesController;
use App\Http\Controllers\Pages\ShopPagesController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('client.home');
})->name('client.home');

Route::get('/about', function () {
    return view('client.home');
})->name('client.about');


//shop
Route::get('/shop', [ShopPagesController::class, 'shopPage'])->name('client.shop');
Route::get('/product/{product}', [ShopPagesController::class, 'productPage'])->name('client.product');
Route::get('/cart', [ShopPagesController::class, 'cartPage'])->name('client.cart');
Route::get('/checkout', [ShopPagesController::class, 'checkoutPage'])->name('client.checkout');
Route::get('/checkout-complete', [ShopPagesController::class, 'checkoutPage'])->name('client.checkout_completed');

Route::get('/cart/add-to-cart/{product}', [CartController::class, 'addToCart'])->name('client.add_to_cart');
Route::get('/cart/remove-from-cart/{product}', [CartController::class, 'removeFromCart'])->name('client.remove_from_cart');

// Authentication
Route::get('/login', [AuthPagesController::class, 'loginPage'])->name('client.login');
Route::get('/register', function () {
    return view('client.home');
})->name('client.register');


Route::post('/login', [AuthController::class, 'login'])->name('client.login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('client.logout');



