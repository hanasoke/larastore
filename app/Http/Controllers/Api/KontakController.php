<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_hp' => 'nullable|string|max:20',
            'subjek' => 'required|string|max:255',
            'pesan' => 'required|string|max:2000',
        ]);

        $kontak = Kontak::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Pesan berhasil dikirim.',
            'data' => $kontak,
        ], 201);
    }
}
