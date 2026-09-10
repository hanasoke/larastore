<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{

    public function index() 
    {
        return view('kontak');
    }

    public function store(Request $request) 
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_hp' => 'nullable|string|max:20',
            'subjek' => 'required|string|max:255',
            'pesan' => 'required|string|max:2000',
        ]);

        Kontak::create($validated);

        return redirect($validated);

        return redirect()
            ->route('kontak')
            ->with(
                'success',
                'Pesan berhasil dikirim. Terima kasih telah menghubungi Pocinui!'
            );
    }
}
