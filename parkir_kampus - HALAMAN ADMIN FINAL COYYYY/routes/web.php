<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AreaParkirController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('index');
});

Route::get ('admin', [AdminController::class, 'index'])->name('admin');
Route::get ('areaparkir', [AreaParkirController::class, 'show'])->name('areaparkir');
Route::get ('jenis', [JenisController::class, 'show'])->name('jenis');
Route::get ('kampus', [KampusController::class, 'show'])->name('kampus');
Route::get ('kendaraan', [KendaraanController::class, 'show'])->name('kendaraan');
Route::get ('transaksi', [TransaksiController::class, 'show'])->name('transaksi');

