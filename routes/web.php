<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;

// Rute utama
Route::get('/', function () {
    return view('landingpage');
});

// Rute Dashboard
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rute Kategori dengan resource controller
Route::resource('categories', \App\Http\Controllers\CategoryController::class);
Route::resource('books', \App\Http\Controllers\BookController::class);

// Rute untuk login dan logout
Auth::routes();
Route::post('logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
