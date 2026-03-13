<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Trang chủ redirect về danh sách sản phẩm
Route::get('/', function () {
    return redirect()->route('products.index');
});

// Danh sách sản phẩm: GET /products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');