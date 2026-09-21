<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\ProgramController;

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