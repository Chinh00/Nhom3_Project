<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('product', [HomeController::class, 'product'])->name('product');
Route::get('cart', [HomeController::class, 'cart'])->name('cart');
Route::get('checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('category', [HomeController::class, 'category'])->name('category');
Route::get('thankyou', [HomeController::class, 'thankyou'])->name('thankyou');
Route::get('userinfo', [HomeController::class, 'userinfo'])->name('userinfo');
Route::get('login', [HomeController::class, 'login'])->name('login');
Route::get('userinfo', [HomeController::class, 'userinfo'])->name('userinfo');
Route::get('userinfo', [HomeController::class, 'userinfo'])->name('userinfo');
