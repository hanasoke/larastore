<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\GuruController;
use App\Http\Controllers\Api\KontakController;
use App\Http\Controllers\Api\ProgramController;

Route::get('/guru', [
    GuruController::class, 
    'index'
]);

Route::get('/guru/{slug}', [
    GuruController::class, 
    'show'
]);

Route::post('/kontak', [
    KontakController::class, 
    'store'
]);

Route::get('/test', function () {
    return response()->json([
        'success' => true,
        'message' => 'Berhasil terhubung ke Laravel'
    ]);
});

Route::get( '/program', [
        ProgramController::class, 
        'index'
]);

Route::get( '/program/{slug}', [ 
        ProgramController::class, 
        'show'
]);