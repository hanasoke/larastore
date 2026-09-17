<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KontakController;

Route::post('/kontak', [KontakController::class, 'store']);

Route::get('/test', function () {
    return response()->json([
        'success' => true,
        'message' => 'Berhasil terhubung ke Laravel'
    ]);
});