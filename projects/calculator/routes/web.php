<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

// Route pertama: tampilkan form kalkulator
Route::get('/calculator', [CalculatorController::class, 'index']);

// Route kedua: proses data dari form
Route::post('/calculator', [CalculatorController::class, 'calculate'])->name('calculator.calculate');

