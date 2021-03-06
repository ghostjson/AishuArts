<?php

use App\Http\Controllers\Managers\AuthController;
use App\Http\Controllers\Managers\CartController;
use App\Http\Controllers\Managers\OrderController;
use App\Http\Controllers\Pages\AuthPagesController;
use App\Http\Controllers\Pages\ClientPagesController;
use App\Http\Controllers\Pages\ShopPagesController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ShopPagesController::class, 'shopPage'])->name('client.home');

Route::get('/about', [ClientPagesController::class, 'aboutPage'])->name('client.about');
Route::get('/profile', [ClientPagesController::class, 'profilePage'])->name('client.profile');
Route::get('/contact', [ClientPagesController::class, 'contactPage'])->name('client.contact');
Route::get('/terms-and-conditions', [ClientPagesController::class, 'termsPage'])->name('client.terms');
Route::get('/search', [ClientPagesController::class, 'searchPage'])->name('client.search');


Route::post('/profile', [AuthController::class, 'profileUpdate'])->name('client.profile.update');
Route::post('/contact', [ClientPagesController::class, 'contactSend'])->name('client.contact.post');



//shop
Route::get('/shop', [ShopPagesController::class, 'shopPage'])->name('client.shop');

//filters
Route::get('/shop/filter/low-to-high', [ShopPagesController::class, 'filterLowToHigh'])->name('client.shop.low_to_high');
Route::get('/shop/filter/high-to-low', [ShopPagesController::class, 'filterHighToLow'])->name('client.shop.high_to_low');
Route::get('/shop/filter/recent', [ShopPagesController::class, 'filterRecent'])->name('client.shop.recent');
Route::get('/shop/filter/rating', [ShopPagesController::class, 'filterRating'])->name('client.shop.rating');

Route::get('/product/{product}', [ShopPagesController::class, 'productPage'])->name('client.product');
Route::get('/cart', [ShopPagesController::class, 'cartPage'])->name('client.cart');
Route::get('/checkout', [ShopPagesController::class, 'checkoutPage'])->name('client.checkout');
Route::get('/checkout-complete/{order}', [ShopPagesController::class, 'checkoutCompletePage'])->name('client.checkout_completed');

Route::get('/buy/{product}', [ShopPagesController::class, 'buyNow'])->name('client.product.buy');

Route::get('/cart/add-to-cart/{product}', [CartController::class, 'addToCart'])->name('client.add_to_cart');
Route::get('/cart/remove-from-cart/{product}', [CartController::class, 'removeFromCart'])->name('client.remove_from_cart');
Route::get('/cart/clear', [CartController::class, 'clearCart'])->name('client.cart.clear');

Route::get('/orders/history', [ClientPagesController::class, 'OrdersHistoryPage'])->name('client.orders.history');
Route::get('/orders/current', [ClientPagesController::class, 'OrdersCurrentPage'])->name('client.orders.current');

Route::post('/order/place', [OrderController::class, 'placeOrder'])->name('client.order.place');

Route::get('/review/{product}', [ClientPagesController::class, 'reviewPage'])->name('client.review');
Route::post('/review/{product}', [OrderController::class, 'addReview'])->name('client.review.post');

// Authentication
Route::get('/login', [AuthPagesController::class, 'loginPage'])->name('client.login');
Route::get('/register', [AuthPagesController::class, 'registerPage'])->name('client.register');


Route::post('/login', [AuthController::class, 'login'])->name('client.login.post');
Route::post('/register', [AuthController::class, 'register'])->name('client.register.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('client.logout');

//cashfree
Route::post('/payment-redirect', [PaymentController::class, 'paymentSuccess'])->name('client.payment_redirect');

