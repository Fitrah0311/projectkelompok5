<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\Reservasi;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/', [PelangganController::class, 'index']);
Route::get('/', [LayananController::class, 'index']);

Route::resource('pelanggan', PelangganController::class);
Route::resource('layanan', LayananController::class);
