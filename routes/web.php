<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontakController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tentang', function() {
    return view('tentang');
})->name('tentang');

Route::get('/program', function() {
    return view('program');
})->name('program');

Route::get('/guru', function () {
    return view('guru');
})->name('guru');

Route::get('/kontak', [KontakController::class, 'index'])
    ->name('kontak');

Route::post('/kontak', [KontakController::class, 'store'])
    ->name('kontak.store');