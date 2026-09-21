<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Guru;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::orderBy('nama')->get();

        $gurus->transform(function($guru) {

            $guru->foto_url = $guru->foto 
                ? asset($guru->foto)
                : null;

            $guru->icon_url = $guru->icon 
                ? asset($guru->icon)
                : null;

            return $guru;
        });

        return response()->json([
            'success' => true, 
            'data' => $gurus,
        ]);
    }

    public function show($slug) 
    {
        $guru = Guru::where('slug', $slug)
            ->firstOrFail();

        $guru->foto_url = $guru->foto 
            ? asset($guru->foto)
            : null;

        $guru->icon_url = $guru->icon 
            ? asset($guru->icon)
            : null;

        return response()->json([
            'success' => true,
            'data' => $guru,
        ]);
    }
}
