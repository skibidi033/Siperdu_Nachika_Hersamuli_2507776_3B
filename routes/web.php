<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BukuController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;

// ===== POV USER ===== //
Route::get('/', [HomeController::class, 'beranda'])->name('user.beranda');
Route::get('/katalog-buku', [HomeController::class, 'katalogBuku'])->name('user.katalog-buku');

// ===== POV ADMIN ===== //
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/data-buku', [BukuController::class, 'index'])->name('admin.data-buku');
