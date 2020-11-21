<?php


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
