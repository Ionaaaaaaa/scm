<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

Route::get("/", [BarangController::class, 'index'])->name('index.index');
// ...existing code...
Route::get('/barang-masuk', [BarangController::class, 'create'])->name('barangmasuk.create');
Route::post('/barang-masuk', [BarangController::class, 'store'])->name('barangmasuk.store');
// ...existing code...
// ...existing code...
Route::get('/barang-keluar', [BarangController::class, 'keluarCreate'])->name('barangkeluar.create');
Route::post('/barang-keluar', [BarangController::class, 'keluarStore'])->name('barangkeluar.store');
// ...existing code...
