<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $fillable = [
        'program_id',
        'nama',
        'email',
        'no_hp',
        'jenis_kelamin',
        'sekolah',
        'kelas',
        'alamat',
        'status',
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
