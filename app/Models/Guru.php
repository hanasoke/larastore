<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = [
        'slug',
        'nama',
        'gelar',
        'jenis_kelamin',
        'usia',
        'mata_pelajaran',
        'pendidikan',
        'universitas',
        'pengalaman',
        'foto',
        'icon',
        'deskripsi',
    ];
}
