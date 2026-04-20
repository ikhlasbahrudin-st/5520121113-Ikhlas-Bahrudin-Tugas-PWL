<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Dosen extends Authenticatable
{
    protected $table = 'dosen'; // ✔ sudah benar

    protected $primaryKey = 'nidn';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'nidn',
        'nama',
        'password'
    ];

    protected $hidden = [
        'password',
        'remember_token' // ✔ tambahkan ini (best practice)
    ];
}
