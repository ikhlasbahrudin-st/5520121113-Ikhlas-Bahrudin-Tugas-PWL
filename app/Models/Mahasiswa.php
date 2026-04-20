<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Mahasiswa extends Authenticatable
{
    protected $table = 'mahasiswa'; // 🔥 WAJIB

    protected $primaryKey = 'npm';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'npm',
        'nidn',
        'nama',
        'password'
    ];

    protected $hidden = [
        'password'
    ];

    // 🔥 RELASI DOSEN
    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'nidn');
    }

    // 🔥 RELASI KRS
    public function krs()
    {
        return $this->hasMany(Krs::class, 'npm');
    }
}
