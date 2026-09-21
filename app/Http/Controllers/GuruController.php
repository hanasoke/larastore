<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::orderBy('nama')->get();

        return view('guru', compact('guru'));
    }


    public function show($slug)
    {
        $guru = Guru::where('slug', $slug)
            ->firstOrFail();

        return view('detail-guru', compact('guru'));
    }
}
