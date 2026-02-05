<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/hello', function () {
    return ('Hello Laravel!');
});

Route::get('/', [PageController::class, 'home'])
    ->name('home');

Route::get('/about', [PageController::class, 'about'])
    ->name('about');

Route::get('/contact', [PageController::class, 'contact'])
    ->name('contact');

Route::get('/products/{id}', [ProductController::class, 'show'])
    ->name('products.show');

Route::get('/index', [ProductController::class, 'index'])
    ->name('products.index');