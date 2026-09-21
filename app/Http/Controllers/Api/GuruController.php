<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Guru;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::orderBy('nama', 'asc')->get();

        return view('guru', compact('guru'));
    }

    public function show($slug) 
    {
        $guru = Guru::where('slug', $slug)
            ->firstOrFail();

        return view('detail-guru', compact('guru'));
    }
}
