<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    public function krs()
{
    return $this->hasMany(Krs::class, 'kode_matakuliah');
}

public function jadwal()
{
    return $this->hasMany(Jadwal::class, 'kode_matakuliah');
}
}
