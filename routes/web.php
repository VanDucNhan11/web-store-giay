<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

// Định tuyến đến trang home
Route::get('/', [HomeController::class, 'showHome'])->name('home');

// Định tuyến đến trang đăng nhập
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');


// Định tuyến đến trang sản phẩm
Route::get('/products', [ProductController::class, 'index'])->name('product');

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', function() {
    Auth::logout();
    return redirect()->route('home');
})->name('logout');

