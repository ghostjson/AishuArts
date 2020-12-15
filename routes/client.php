<?php

use App\Http\Controllers\Managers\AuthController;
use App\Http\Controllers\Managers\CartController;
use App\Http\Controllers\Managers\OrderController;
use App\Http\Controllers\Pages\AuthPagesController;
use App\Http\Controllers\Pages\ClientPagesController;
use App\Http\Controllers\Pages\ShopPagesController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ClientPagesController::class, 'homePage'])->name('client.home');

Route::get('/about', [ClientPagesController::class, 'homePage'])->name('client.about');
Route::get('/profile', [ClientPagesController::class, 'profilePage'])->name('client.profile');

Route::post('/profile', [AuthController::class, 'profileUpdate'])->name('client.profile.update');


//shop
Route::get('/shop', [ShopPagesController::class, 'shopPage'])->name('client.shop');
Route::get('/product/{product}', [ShopPagesController::class, 'productPage'])->name('client.product');
Route::get('/cart', [ShopPagesController::class, 'cartPage'])->name('client.cart');
Route::get('/checkout', [ShopPagesController::class, 'checkoutPage'])->name('client.checkout');
Route::get('/checkout-complete/{order}', [ShopPagesController::class, 'checkoutCompletePage'])->name('client.checkout_completed');

Route::get('/cart/add-to-cart/{product}', [CartController::class, 'addToCart'])->name('client.add_to_cart');
Route::get('/cart/remove-from-cart/{product}', [CartController::class, 'removeFromCart'])->name('client.remove_from_cart');
Route::get('/cart/clear', [CartController::class, 'clearCart'])->name('client.cart.clear');

Route::get('/orders/history', [ClientPagesController::class, 'OrdersHistoryPage'])->name('client.orders.history');
Route::get('/orders/current', [ClientPagesController::class, 'OrdersCurrentPage'])->name('client.orders.current');

Route::post('/order/place', [OrderController::class, 'placeOrder'])->name('client.order.place');

// Authentication
Route::get('/login', [AuthPagesController::class, 'loginPage'])->name('client.login');
Route::get('/register', function () {
    return view('client.home');
})->name('client.register');


Route::post('/login', [AuthController::class, 'login'])->name('client.login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('client.logout');

//cashfree
Route::post('/payment-redirect', [PaymentController::class, 'paymentSuccess'])->name('client.payment_redirect');


//depreciated
Route::get('/orders', [ClientPagesController::class, 'ordersPage'])->name('client.orders');
