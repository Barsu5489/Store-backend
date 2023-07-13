<?php

use Illuminate\Support\Facades\Route;

Route::resource('orders', \App\Http\Controllers\OrderController::class);
Route::resource('carts', \App\Http\Controllers\CartController::class);
Route::resource('products', \App\Http\Controllers\ProductController::class);
Route::resource('users', \App\Http\Controllers\UserController::class);
Route::resource('images', \App\Http\Controllers\ImageController::class);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return 'Hello, Laravel!';
});

