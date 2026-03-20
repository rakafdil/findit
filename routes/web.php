<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/auth', function () {
    return view('auth');
})->name('auth');

Route::get('/about', function () {
    return view('about');
})->name('about');
