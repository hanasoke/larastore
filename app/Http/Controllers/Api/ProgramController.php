<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::where('aktif', true)
            ->orderBy('mata_pelajaran')
            ->orderBy('jenjang')
            ->get();

        $data = $programs -> map(function ($program) {
            return [
                'id' => $program->id,
                'slug' => $program->slug,
                'nama_pelajaran' => $program->nama_program,
                'mata_pelajaran' => $program->mata_pelajaran,
                'jenjang' => $program->jenjang,
                'deskripsi' => $program->deskripsi,
                'jadwal' => $program->jadwal,
                'harga' => $program->harga, 

                'gambar_url' => $program->gambar ? asset($program->gambar) : null,
                
                'icon_url' => $program->icon ? asset($program->icon) : null,

                'aktif' => $program->aktif,
            ];
            
        });

        return response()->json([
            'success' => true,
            'data' => $data,
        ]);
}

    public function show($slug) 
    {
        $program = Program::where('slug', $slug) 
            ->where('aktif', true)
            ->firstOrFail();

        $program->gambar_url = 
            $program->gambar 
                ? asset($program->gambar)
                : null;

        $program->icon_url = 
            $program->icon 
                ? asset($program->icon)
                : null;
        
        return response()->json([
            'success' => true, 
            'data' => $program, 
        ]);
    }
}
