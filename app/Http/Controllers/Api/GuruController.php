<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Guru;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::orderBy('nama', 'asc')->get();

        $data = $gurus->map(function ($guru) {
            return [
                'id' => $guru->id,
                'slug' => $guru->slug,
                'nama' => $guru->nama,
                'gelar' => $guru->gelar,
                'jenis_kelamin' => $guru->jenis_kelamin,
                'usia' => $guru->usia,
                'mata_pelajaran' => $guru->mata_pelajaran,
                'pendidikan' => $guru->pendidikan,
                'universitas' => $guru->universitas,
                'pengalaman' => $guru->pengalaman,

                'foto_url' => $guru->foto
                    ? asset('images/foto_guru/' . $guru->foto)
                    : null,

                'icon_url' => $guru->icon
                    ? asset('images/icons/subjects/' . $guru->icon)
                    : null,

                'deskripsi' => $guru->deskripsi,
            ];
        });

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function show($slug) 
    {
        $guru = Guru::where('slug', $slug)
            ->firstOrFail();

        return view('detail-guru', compact('guru'));
    }
}
