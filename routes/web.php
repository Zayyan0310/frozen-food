<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home'); 
});

Route::get('/products', [ProductController::class, 'index']);

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/contact-us', function () {
    return view('contact');
});