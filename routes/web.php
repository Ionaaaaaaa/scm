<?php

use App\Http\Controllers\Supplier;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PenjualanController;


Route::get("/", [BarangController::class, 'dashboard'])->name('index.index');

Route::get('/dashboard', [BarangController::class, 'dashboard'])->name('dashboard');

Route::get('/barang-masuk', [BarangController::class, 'create'])->name('barangmasuk.create');
Route::post('/barang-masuk', [BarangController::class, 'store'])->name('barangmasuk.store');

Route::get('/barang-keluar', [BarangController::class, 'keluarCreate'])->name('barangkeluar.create');
Route::post('/barang-keluar', [BarangController::class, 'keluarStore'])->name('barangkeluar.store');

Route::get('/supplier', [SupplierController::class, 'create'])->name('supplier.create');
Route::post('/supplier', [SupplierController  ::class, 'store'])->name('supplier.store');

Route::get('/penjualan', [PenjualanController::class, 'index'])->name('penjualan.index');
Route::post('/penjualan', [PenjualanController::class, 'store'])->name('penjualan.store');

