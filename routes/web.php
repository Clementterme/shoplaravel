<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return ('Hello Laravel!');
});

Route::get('/', [PageController::class, 'home']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/products/{id}', [ProductController::class, 'show']);