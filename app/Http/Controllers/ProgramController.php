<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::where('aktif', true)
            ->orderBy('mata_pelajaran')
            ->orderBy('jenjang')
            ->get();

        return view(
            'program',
            compact('program')
        );
    }

    public function show($slug) 
    {
        $program = Program::where('slug', $slug)
            ->where('aktif', true)
            ->firstOrFail();

        return view(
            'detail-program',
            compact('program')
        );
    }
}
