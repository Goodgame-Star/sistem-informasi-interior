<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

// Rute Publik (Pelanggan)
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/katalog', [HomeController::class, 'katalog'])->name('katalog');
Route::get('/pemesanan', [HomeController::class, 'pemesanan'])->name('pemesanan');
Route::post('/pemesanan/store', [OrderController::class, 'store'])->name('pemesanan.store');

// Rute Admin (Sementara kita buat terbuka dulu untuk tes tampilan, nanti baru dipasang Middleware Auth)
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});