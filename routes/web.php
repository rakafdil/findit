<?php

use App\Http\Controllers\CariBarangController;
use App\Http\Controllers\LaporTemuController;
use App\Http\Middleware\AuthMiddleware;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/','home')->name('home');
Route::view('/about', 'about')->name('about');

Route::get('/auth', function () {
    $mode = request()->query('mode', 'login');

    if (!in_array($mode, ['login', 'register'])) {
        abort(404);
    }

    return view('auth', compact('mode'));
})->name('auth');


Route::get('/login-test', function () {
    $user = User::first() ?? User::create([
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password123',
    ]);

    Auth::login($user);
    return redirect('/dashboard');
})->name('login-test');


Route::get('/logout-test', function () {
    Auth::logout();
    
    return redirect('/');
})->name('logout-test');

Route::middleware(['auth'])->group( function () {
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/lapor-temu', [LaporTemuController::class, 'show'])->name('lapor-temu.show');
    Route::post('/lapor-temu', [LaporTemuController::class, 'create'])->name('lapor-temu.submit');

    Route::get('/lapor-hilang', function() {
        return view('lapor-hilang');
    });

    Route::get('/cari-barang', [CariBarangController::class, 'show'])->name('lapor-temu.show');
});