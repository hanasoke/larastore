<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pendaftaran;
use App\Models\Program;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'program_id' =>
                'required|exists:programs,id',

            'nama' =>
                'required|string|max:255',

            'email' =>
                'required|email|max:255',

            'no_hp' =>
                'required|string|max:20',

            'jenis_kelamin' =>
                'required|in:Laki-laki,Perempuan',

            'sekolah' =>
                'required|string|max:255',

            'kelas' =>
                'required|string|max:50',

            'alamat' =>
                'nullable|string|max:1000',
        ]);

        $program = Program::where(
            'id',
            $validated['program_id']
        )
        ->where('aktif', true)
        ->first();

        if (!$program) {
            return response()->json([
                'success' => false,
                'message' => 'Program tidak tersedia.'
            ], 404);
        }

        $validated['status'] = 'Menunggu';

        $pendaftaran = Pendaftaran::create(
            $validated
        );

        $pendaftaran->load('program');

        return response()->json([
            'success' => true,
            'message' =>
                'Pendaftaran berhasil dikirim.',
            'data' => $pendaftaran
        ], 201);
    }
}