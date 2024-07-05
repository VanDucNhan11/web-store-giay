<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\productController;

// Định tuyến đến trang home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Định tuyến đến trang đăng nhập
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Xử lý yêu cầu đăng nhập
Route::post('/login', [LoginController::class, 'login']);

Route::get('/products', [productController::class, 'index'])->name('product');