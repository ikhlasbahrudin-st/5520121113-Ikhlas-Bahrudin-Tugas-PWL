<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class AdminController extends Controller
{
    /**
     * 🔥 Dashboard Admin
     */
    public function dashboard()
    {
        // Hitung data
        $totalMahasiswa = Mahasiswa::count();
        $totalDosen = Dosen::count();

        return view('admin.dashboard', compact('totalMahasiswa', 'totalDosen'));
    }

    /**
     * 📚 Data Mahasiswa
     */
    public function mahasiswa()
    {
        $data = Mahasiswa::with('dosen')->get();
        return view('admin.mahasiswa', compact('data'));
    }

    /**
     * 👨‍🏫 Data Dosen
     */
    public function dosen()
    {
        $data = Dosen::all();
        return view('admin.dosen', compact('data'));
    }

    /**
     * 🔍 Detail Dosen + Mahasiswa Bimbingan
     */
    public function detailDosen($nidn)
    {
        $dosen = Dosen::with('mahasiswa')->where('nidn', $nidn)->firstOrFail();

        return view('admin.detail_dosen', compact('dosen'));
    }

    /**
     * 🚪 Logout
     */
    public function logout()
    {
        session()->flush();
        return redirect('/');
    }
}
