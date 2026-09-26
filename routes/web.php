<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\PendaftaranController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tentang', function() {
    return view('tentang');
})->name('tentang');

Route::get('/guru', [GuruController::class, 'index'])
    ->name('guru');

Route::get('guru/{slug}', [GuruController::class, 'show'])
    ->name('guru.detail');

Route::get('/kontak', [KontakController::class, 'index'])
    ->name('kontak');

Route::post('/kontak', [KontakController::class, 'store'])
    ->name('kontak.store');

Route::get(
    '/program',
    [ProgramController::class, 'index']
)->name('program');

Route::get(
    '/program/{slug}', 
    [ProgramController::class, 'show']
)->name('program.detail');

Route::get(
    '/pendaftaran',
    [PendaftaranController::class, 'create']
)->name('pendaftaran');

Route::post(
    '/pendaftaran',
    [PendaftaranController::class, 'store']
)->name('pendaftaran.store');

Route::get(
    '/pendaftaran/sukses',
    [PendaftaranController::class, 'sukses']
)->name('pendaftaran.sukses');