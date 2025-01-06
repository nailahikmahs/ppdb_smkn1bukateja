<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginsiswaController;
use App\Http\Controllers\SiswaController;


// Halaman Utama
Route::get('/', function () {
    return view('index');
});

// Grup Route untuk pengguna tamu (belum login)
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');

});

Route::get('/login-siswa', [LoginsiswaController::class, 'showLoginForm'])->name('loginSiswa');
Route::post('/login-siswa', [LoginsiswaController::class, 'login']);
Route::post('/logoutsiswa', [LoginsiswaController::class, 'logout'])->name('logoutSiswa');

// Route untuk Logout (hanya untuk pengguna yang login)
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

// Route untuk Dashboard (hanya untuk pengguna yang login)
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard.index');
Route::get('/dashboard2', [DashboardController::class, 'index2'])->name('dashboard.index2');

// Route untuk Data Pendaftar
Route::get('/data-pendaftar', [PendaftarController::class, 'index'])->name('data.pendaftar');
Route::get('/data-pendaftar/create', [PendaftarController::class, 'create'])->name('pendaftar.create');
Route::get('/data-pendaftar/formulir', [PendaftarController::class, 'formulir'])->name('pendaftar.formulir');

Route::get('/data-pendaftar/{id}/edit', [PendaftarController::class, 'edit'])->name('pendaftar.edit');
Route::delete('/pendaftar/{id}', [PendaftarController::class, 'destroy'])->name('pendaftar.destroy');
// Route::get('/siswa/formulir/{id}', [SiswaController::class, 'formulir'])->name('siswa.formulir');


//route untuk registrasi siswa
Route::get('/register-siswa', [RegisterController::class, 'create'])->name('siswa.create');
Route::post('/register-siswa', [RegisterController::class, 'store'])->name('siswa.store');




