<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route default (halaman welcome)
Route::get('/', function () {
    return view('welcome');
});

// Group route untuk PageController
    Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home');
    Route::get('/about', 'about');
    Route::get('/contact', 'contact');
});