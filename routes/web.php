<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\GuruController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tentang', function() {
    return view('tentang');
})->name('tentang');

Route::get('/program', function() {
    return view('program');
})->name('program');

Route::get('/guru', [GuruController::class, 'index'])
    ->name('guru');

Route::get('guru/{slug}', [GuruController::class, 'show'])
    ->name('guru.detail');

Route::get('/kontak', [KontakController::class, 'index'])
    ->name('kontak');

Route::post('/kontak', [KontakController::class, 'store'])
    ->name('kontak.store');