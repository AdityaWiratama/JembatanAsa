<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProgramDonasiController;
use App\Http\Controllers\DonasiUangController;
use App\Http\Controllers\DonasiBarangController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Storage;

Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::get('/donasi-uang', [DonasiUangController::class, 'create'])->name('donasi.uang');
Route::post('/donasi-uang', [DonasiUangController::class, 'store'])->name('donasi.uang.store');

Route::get('/donasi-barang', [DonasiBarangController::class, 'create'])->name('donasi.barang');
Route::post('/donasi-barang', [DonasiBarangController::class, 'store'])->name('donasi.barang.store');

Route::get('/donasi-invoice/{id}', [InvoiceController::class, 'show'])->name('donasi.invoice');
Route::get('/donasi-invoice-barang/{id}', [InvoiceController::class, 'showBarang'])->name('donasi.invoice.barang');

Route::resource('berita', BeritaController::class);
Route::resource('program', ProgramDonasiController::class);