<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;

Route::get('/', [PageController::class, 'home'])
    ->name('home');

Route::get('/about', [PageController::class, 'about'])
    ->name('about');

Route::get('/contact', [PageController::class, 'contact'])
    ->name('contact');

//Route::get('/products/create', [ProductController::class, 'create'])
//    ->name('products.create');
//
//Route::get('/products/edit/{id}', [ProductController::class, 'edit'])
//    ->name('products.edit');
//
//Route::get('/products/{id}', [ProductController::class, 'show'])
//    ->name('products.show');

//Route::get('/products', [ProductController::class, 'index'])
//    ->name('products.index');

Route::resource('/products', ProductController::class);

Route::post('/products', [ProductController::class, 'store'])
    ->name('products.store');
