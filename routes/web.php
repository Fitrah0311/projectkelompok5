<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::resource('reservasi', ReservasiController::class);
Route::resource('pelanggan', PelangganController::class);
Route::resource('layanan', LayananController::class);
