<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/program', function() {
    return view('program');
})->name('program');

Route::get('/guru', function () {
    return view('guru');
});