<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PendapatanController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('dashboard', [DashboardController::class, 'index']);
Route::resource('kelola', UserController::class);

Route::resource('driver', DriverController::class);
Route::resource('mitra', MitraController::class);
Route::resource('pemesanan', PemesananController::class);
Route::resource('promo', PromoController::class);
Route::resource('laporan', PendapatanController::class);
Route::resource('admin', AdminController::class);

Route::get('cetak', [CetakController::class, 'cetak']);
Route::get('profil', [UserController::class, 'editProfil']);

Route::get('editprofile', [UserController::class, 'editProfile']);
Route::get('changepass', [AdminController::class, 'changePass']);
Route::post('change', [AdminController::class, 'change']);
