<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/auth', function () {
    $mode = request()->query('mode', 'login');

    if (!in_array($mode, ['login', 'register'])) {
        abort(404);
    }

    return view('auth', compact('mode'));
})->name('auth');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/login-test', function () {
    $user = User::first() ?? User::create([
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password123',
    ]);

    Auth::login($user);
    return view('dashboard');
})->name('login-test');


Route::get('/logout-test', function () {
    Auth::logout();
    return view('home');
})->name('logout-test');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
