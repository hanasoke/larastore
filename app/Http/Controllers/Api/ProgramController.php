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

        $programs->transform(function ($program) {

                $program->gambar_url = 
                    $program->gambar 
                        ? asset($program->gambar)
                        : null;

                $program->icon_url = 
                    $program->icon 
                        ? asset($program->icon)
                        : null;

                return $program;
            });

            return response()->json([
                'success' => true,
                'data' => $programs,
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
