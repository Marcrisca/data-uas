<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\AreaParkirController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index'])->name('index');
Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

Route::get('/kendaraans', [KendaraanController::class, 'index']);


Route::middleware(['auth'])->group(function () {
    Route::resource('kendaraan', KendaraanController::class);
    Route::resource('transaksi', TransaksiController::class);
});

// Jenis Routes
Route::prefix('jenis')->name('jenis.')->group(function () {
    Route::get('index', [JenisController::class, 'index'])->name('index');
    Route::get('{id}/view', [JenisController::class, 'view'])->name('view');
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('create', [JenisController::class, 'create'])->name('create');
        Route::post('store', [JenisController::class, 'store'])->name('store');
        Route::get('{id}/edit', [JenisController::class, 'edit'])->name('edit');
        Route::delete('{id}', [JenisController::class, 'destroy'])->name('destroy');
    });


    Route::get('/kampus', [KampusController::class, 'index'])->name('kampus.index');
    Route::get('/kampus/create', [KampusController::class, 'create'])->name('kampus.create');
    Route::post('/kampus', [KampusController::class, 'store'])->name('kampus.store');
    Route::get('/kampus/{kampus}', [KampusController::class, 'show'])->name('kampus.show');
    Route::get('/kampus/{kampus}/edit', [KampusController::class, 'edit'])->name('kampus.edit');
    Route::put('/kampus/{kampus}', [KampusController::class, 'update'])->name('kampus.update');
    Route::delete('/kampus/{kampus}', [KampusController::class, 'destroy'])->name('kampus.destroy');

    Route::resource('area_parkir', AreaParkirController::class);
});


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
