<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/products', function () {
    return view('admin.products');
})->name('admin.products');

Route::get('/products/new', function () {
    return view('admin.products.new');
})->name('admin.products.new');
