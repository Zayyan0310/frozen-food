<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// 1. Rute Utama (Akar Website) -> Menampilkan Halaman Beranda
Route::get('/', function () {
    return view('home'); 
});

// 2. Rute Katalog -> Menampilkan Halaman Produk dari Controller
Route::get('/products', [ProductController::class, 'index']);

Route::get('/about-us', function () {
    return view('about');
});