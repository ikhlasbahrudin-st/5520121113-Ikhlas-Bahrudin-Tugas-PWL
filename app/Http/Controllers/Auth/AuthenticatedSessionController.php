<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'identifier' => 'required',
            'password' => 'required',
        ]);

        // 🔥 LOGIN MAHASISWA
        $mahasiswa = Mahasiswa::where('npm', $request->identifier)->first();

        if ($mahasiswa && Hash::check($request->password, $mahasiswa->password)) {
            Auth::login($mahasiswa);

            return redirect('/mahasiswa/dashboard');
        }

        // 🔥 LOGIN DOSEN
        $dosen = Dosen::where('nidn', $request->identifier)->first();

        if ($dosen && Hash::check($request->password, $dosen->password)) {
            Auth::login($dosen);

            return redirect('/dosen/dashboard');
        }

        return back()->withErrors([
            'identifier' => 'NPM / NIDN atau password salah.',
        ]);
    }
}
