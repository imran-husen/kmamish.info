<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
});

// This is the roting of the about us page
Route::get('/about-us', [HomeController::class, 'about'])->name('about.us');