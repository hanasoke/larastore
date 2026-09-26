<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function create(Request $request)
    {
        $programs = Program::where('aktif', true)
            ->orderBy('mata_pelajaran')
            ->orderBy('jenjang')
            ->get();

        $selectedProgram = null;

        if ($request->filled('program')) {
            $selectedProgram = Program::where(
                'slug',
                $request->program
            )
            ->where('aktif', true)
            ->first();
        }

        return view(
            'pendaftaran',
            compact('programs', 'selectedProgram')
        );
    }


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

        $validated['status'] = 'Menunggu';

        Pendaftaran::create($validated);

        return redirect()
            ->route('pendaftaran.sukses')
            ->with(
                'success',
                'Pendaftaran berhasil dikirim.'
            );
    }


    public function sukses()
    {
        return view('pendaftaran-sukses');
    }
}
