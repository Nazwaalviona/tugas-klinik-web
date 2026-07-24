<?php

use App\Models\Pasien;
use App\Models\Kunjungan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    $totalPasien = Pasien::count();
    $totalKunjungan = Kunjungan::count();
    $pasienTerbaru = Pasien::latest()->take(5)->get();

    return view('dashboard', compact('totalPasien', 'totalKunjungan', 'pasienTerbaru'));
})->middleware(['auth', 'verified'])->name('dashboard');

use App\Http\Controllers\ProfileController;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


use App\Http\Controllers\KunjunganController;

Route::get('/pasien/{pasien_id}/kunjungan', [KunjunganController::class, 'index'])->name('kunjungan.index');
Route::post('/pasien/{pasien_id}/kunjungan', [KunjunganController::class, 'store'])->name('kunjungan.store');

use App\Http\Controllers\PasienController;

Route::middleware(['auth'])->group(function () {
    Route::get('/pasiens', [PasienController::class, 'index'])->name('pasiens.index');
    Route::get('/pasiens/create', [PasienController::class, 'create'])->name('pasiens.create');

    // Tambahkan rute-rute di bawah ini:
    Route::get('/pasiens/{pasien}/edit', [PasienController::class, 'edit'])->name('pasiens.edit');
    Route::put('/pasiens/{pasien}', [PasienController::class, 'update'])->name('pasiens.update');
    Route::delete('/pasiens/{pasien}', [PasienController::class, 'destroy'])->name('pasiens.destroy');
});