<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('likes', function () {
    return view('dashboard.likes');
})->name('likes.index');

Route::get('cart', function () {
    return view('dashboard.cart');
})->name('cart.index');
