<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('cart', function () {
    return view('partials.cart');
})->name('cart.index');
