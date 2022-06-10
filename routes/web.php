<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Controller\HomeController;


Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/category', function () {
    return view('category');
})->name('category');

Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');

Route::get('/userinfo', function () {
    return view('userinfo');
})->name('userinfo');



