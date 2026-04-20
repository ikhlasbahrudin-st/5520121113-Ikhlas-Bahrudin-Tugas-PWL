<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// ✅ WAJIB IMPORT MODEL
use App\Models\Mahasiswa;
use App\Models\Krs;
use App\Models\Jadwal;

class KampusController extends Controller
{
    public function dashboard()
{
    return view('dashboard', [
        'totalMahasiswa' => Mahasiswa::count(),
        'totalKrs' => Krs::count(),
        'totalJadwal' => Jadwal::count(),
    ]);
}
    public function mahasiswa()
    {
        $data = Mahasiswa::with('dosen')->get();
        return view('mahasiswa.index', compact('data'));
    }

    public function krs()
    {
        $data = Krs::with(['mahasiswa', 'matakuliah'])->get();
        return view('krs.index', compact('data'));
    }

    public function jadwal()
    {
        $data = Jadwal::with(['dosen', 'matakuliah'])->get();
        return view('jadwal.index', compact('data'));
    }
}
