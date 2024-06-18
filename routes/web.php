<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/product', function() {
    return view('product-info');
})->name('product') ;


Route::get('/products', [ProductController::class, 'index'])->name('users.index');
Route::get('/users/{userId}', [UserController::class, 'show'])->name('user.detail');
