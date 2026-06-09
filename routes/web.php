<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListProductController;

Route::get('/listproduk', [ListProductController::class, 'show']);
Route::post('/listproduk', [ListProductController::class, 'simpan'])->name('produk.simpan');
