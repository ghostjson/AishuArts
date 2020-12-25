<?php


use App\Http\Controllers\Managers\CategoryController;
use App\Http\Controllers\Managers\PagesController;
use App\Http\Controllers\Managers\ShippingController;
use App\Http\Controllers\Pages\AdminPagesController;
use App\Http\Controllers\Managers\ProductController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::middleware('admin')->group(function () {

    Route::get('/', [AdminPagesController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/products', [AdminPagesController::class, 'productsPage'])->name('admin.products');
    Route::get('/products/new', [AdminPagesController::class, 'createProductPage'])->name('admin.products.new');
    Route::get('/products/edit/{product}', [AdminPagesController::class, 'editProductPage'])->name('admin.products.edit');


    Route::post('/products/new', [ProductController::class, 'new'])->name('admin.products.new.post');
    Route::post('/products/edit/{product}', [ProductController::class, 'update'])->name('admin.products.edit.post');
    Route::delete('/products', [ProductController::class, 'delete'])->name('admin.products.delete');

    Route::get('/products/featured/{product}', [ProductController::class, 'featured'])->name('admin.products.featured');
    Route::get('/products/featured/remove/{product}', [ProductController::class, 'removeFeatured'])->name('admin.products.featured.remove');

    Route::get('/products/activate/{product}', [ProductController::class, 'activateProduct'])->name('admin.products.activate');
    Route::get('/products/deactivate/{product}', [ProductController::class, 'deactivateProduct'])->name('admin.products.deactivate');
//category
    Route::get('/category', [AdminPagesController::class, 'categoryPage'])->name('admin.category');
    Route::post('/category', [CategoryController::class, 'create'])->name('admin.category.post');
    Route::delete('/category', [CategoryController::class, 'delete'])->name('admin.category.delete');

//shipment
    Route::get('/shipping', [AdminPagesController::class, 'shippingPage'])->name('admin.shipping');
    Route::post('/shipping', [ShippingController::class, 'updateShiprocketCredential'])->name('admin.shipping.update');

    Route::get('/shipping/refresh', [ShippingController::class, 'refreshShiprocketToken'])->name('admin.shipping.refresh');

//orders
    Route::get('/orders', [AdminPagesController::class, 'ordersPage'])->name('admin.orders');
    Route::get('/orders/{order}', [AdminPagesController::class, 'orderView'])->name('admin.orders.view');

//payment
    Route::get('/payment', [AdminPagesController::class, 'paymentPage'])->name('admin.payment');
    Route::post('/payment', [PaymentController::class, 'updatePaymentCredentials'])->name('admin.payment.update');

    //pages
    Route::get('/pages', [AdminPagesController::class, 'pagesPage'])->name('admin.pages');
    Route::get('/pages/home-page', [AdminPagesController::class, 'homePage'])->name('admin.pages.home');
    Route::get('/pages/about-page', [AdminPagesController::class, 'aboutPage'])->name('admin.pages.about');
    Route::get('/pages/contact-page', [AdminPagesController::class, 'contactPage'])->name('admin.pages.contact');

    Route::post('/pages/home-page/update', [PagesController::class, 'homePageUpdate'])->name('admin.pages.home.update');
    Route::post('/pages/about-page/update', [PagesController::class, 'aboutPageUpdate'])->name('admin.pages.about.update');
    Route::post('/pages/contact-page/update', [PagesController::class, 'contactPageUpdate'])->name('admin.pages.contact.update');

});

