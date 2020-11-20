<?php


use App\Http\Controllers\Shop\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/products', [ProductController::class, 'indexPage'])->name('admin.products');

Route::get('/products/new', [ProductController::class, 'newPage'])->name('admin.products.new');

Route::post('/products/new', [ProductController::class, 'new'])->name('admin.products.new.post');

Route::get('/products/edit/{product}', [ProductController::class, 'editPage'])->name('admin.products.edit');
Route::post('/products/edit/{product}', [ProductController::class, 'update'])->name('admin.products.edit.post');

Route::delete('/products', [ProductController::class, 'delete'])->name('admin.products.delete');
