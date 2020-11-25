<?php


use App\Http\Controllers\Managers\CategoryController;
use App\Http\Controllers\Managers\ShippingController;
use App\Http\Controllers\Pages\AdminPagesController;
use App\Http\Controllers\Managers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdminPagesController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/products', [AdminPagesController::class, 'productsPage'])->name('admin.products');
Route::get('/products/new', [AdminPagesController::class, 'createProductPage'])->name('admin.products.new');
Route::get('/products/edit/{product}', [AdminPagesController::class, 'editProductPage'])->name('admin.products.edit');


Route::post('/products/new', [ProductController::class, 'new'])->name('admin.products.new.post');
Route::post('/products/edit/{product}', [ProductController::class, 'update'])->name('admin.products.edit.post');
Route::delete('/products', [ProductController::class, 'delete'])->name('admin.products.delete');

Route::get('/products/featured/{product}', [ProductController::class, 'featured'])->name('admin.products.featured');
Route::get('/products/featured/remove/{product}', [ProductController::class, 'removeFeatured'])->name('admin.products.featured.remove');


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
