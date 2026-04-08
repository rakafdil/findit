<?php

use App\Http\Controllers\LaporTemu;
use App\Http\Middleware\AuthMiddleware;
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

Route::group(['middleware' => AuthMiddleware::class], function () {
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/lapor-temu', [LaporTemu::class, 'show'])->name('lapor-temu.show');
    Route::post('/lapor-temu', [LaporTemu::class, 'submit'])->name('lapor-temu.submit');

    Route::get('/lapor-hilang', function() {
        return view('lapor-hilang');
    });
});