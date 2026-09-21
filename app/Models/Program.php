<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
        'slug',
        'nama_program',
        'mata_pelajaran',
        'jenjang',
        'deskripsi',
        'jadwal',
        'harga',
        'gambar',
        'icon',
        'aktif',
    ];

    protected $casts = [
        'harga' => 'integer',
        'aktif' => 'boolean',
    ];
}
