<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DonationController;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Ini adalah definisi semua route utama untuk aplikasi web.
|
| Kelompok route berdasarkan fungsinya: landing, dashboard, donasi,
| profil, dan autentikasi.
*/

// 🔹 Halaman Landing
Route::get('/', function () {
    return view('landing');
})->name('landing');

// 🔹 Dashboard (Login & Terverifikasi)
Route::get('/dashboard', function () {
    $logoUrl = Storage::url('logo.png');
    return view('dashboard', compact('logoUrl'));
})->middleware(['auth', 'verified'])->name('dashboard');

// 🔹 Donasi (Khusus Pengguna Login)
    Route::post('/simpan', [DonationController::class, 'store'])->name('donation.store');


// 🔹 Profil Pengguna (Login Wajib)
Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 🔹 Otentikasi (Login, Register, Forgot Password, dll)
require __DIR__ . '/auth.php';
