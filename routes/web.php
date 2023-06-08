<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SimpananController;
use App\Http\Middleware\UserAkses;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [SessionController::class, 'index']);
Route::get('/home', [SessionController::class, 'index']);
Route::get('/home/login', [SessionController::class, 'login']);
Route::get('/home/register', [SessionController::class, 'create']);    
Route::post('/home/logout', [SessionController::class, 'logout']);

Route::middleware(['auth'])->group(function (){
    Route::get('/anggota', [AnggotaController::class, 'index'])->middleware('userAkses:3');
    
    Route::get('/nasabah', [NasabahController::class, 'index'])->middleware('userAkses:1');
    Route::get('/nasabah/read', [NasabahController::class, 'read'])->name('nasabah.read');
    Route::get('/nasabah/array', [NasabahController::class, 'array'])->name('nasabah.array');
    Route::get('/nasabah/simpanan', [NasabahController::class, 'simpanan'])->name('nasabah.simpanan');
    Route::post('/nasabah/array/filtered', [NasabahController::class, 'array_filtered'])->name('nasabah.filtered');
    Route::post('/nasabah/create', [NasabahController::class, 'create'])->name('nasabah.create');
    Route::post('/nasabah/delete', [NasabahController::class, 'delete'])->name('nasabah.delete');
    Route::post('/nasabah/simpanan/delete', [NasabahController::class, 'delete_simpanan'])->name('nasabah.simpanan.delete');
    Route::post('/nasabah/simpanan/tambah', [NasabahController::class, 'tambah_simpanan'])->name('nasabah.simpanan.tambah');
    Route::post('/nasabah/update', [NasabahController::class, 'update'])->name('nasabah.update');
    Route::post('/nasabah/read_file', [NasabahController::class, 'read_file'])->name('nasabah.read_file');

    Route::get('/simpanan', [SimpananController::class, 'index'])->middleware('userAkses:1');
    Route::get('/simpanan/array', [SimpananController::class, 'array'])->name('simpanan.array');
    Route::get('/simpanan/nasabah/array', [SimpananController::class, 'nasabah_array'])->name('simpanan.nasabah');
    Route::get('/simpanan/create', [SimpananController::class, 'create'])->name('simpanan.create');
    Route::get('/simpanan/delete', [SimpananController::class, 'delete'])->name('simpanan.delete');
    Route::post('/simpanan/update', [SimpananController::class, 'update'])->name('simpanan.update');
    Route::get('/simpanan/read', [SimpananController::class, 'read'])->name('simpanan.read');

    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('userAkses:1');

    Route::get('/registrasi', [RegistrasiController::class, 'index'])->middleware('userAkses:1');
    Route::get('/registrasi/confirm', [RegistrasiController::class, 'confirm'])->middleware('userAkses:1');
    Route::get('/registrasi/array', [RegistrasiController::class, 'array_registrasi'])->middleware('userAkses:1');
    
    Route::get('/pinjaman', [PinjamanController::class, 'index'])->middleware('userAkses:1');
    Route::get('/laporan', [LaporanController::class, 'index'])->middleware('userAkses:1');
});





