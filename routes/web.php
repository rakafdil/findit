<?php

use App\Http\Controllers\CariBarangController;
use App\Http\Controllers\LaporTemuController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
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
        'role' => 'User',
        'nim_nip' => '235150200111009'
    ]);

    Auth::login($user);
    return redirect('/dashboard');
})->name('login-test');

Route::get('/logout-test', function () {
    Auth::logout();

    return redirect('/');
})->name('logout-test');

Route::prefix('dashboard')
    ->name('dashboard.')
    ->middleware(['auth'])
    ->group(
        function () {
            Route::get('/', fn() => view('dashboard'))->name('index');

            Route::name('lapor-temu.')->group(function () {
                Route::get('/lapor-temu', [LaporTemuController::class, 'show'])->name('index');
                Route::post('/lapor-temu', [LaporTemuController::class, 'create'])->name('submit');
            });

            Route::get('/lapor-hilang', fn() => view('lapor-hilang'))->name('lapor-hilang.index');

            Route::get('/cari-barang', [CariBarangController::class, 'show'])
                ->name('cari-barang.index');

            Route::get('/cari-barang/search', [CariBarangController::class, 'find'])
                ->name('cari-barang.search');
        }
    );