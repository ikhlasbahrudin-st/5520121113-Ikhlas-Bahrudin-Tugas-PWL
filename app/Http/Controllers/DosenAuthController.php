<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class DosenAuthController extends Controller
{
    public function showLogin()
    {
        return view('dosen.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'nidn' => 'required',
            'password' => 'required'
        ]);

        $dosen = Dosen::where('nidn', $request->nidn)->first();

        if ($dosen && Hash::check($request->password, $dosen->password)) {
            Session::put('dosen', $dosen);
            return redirect('/dashboard-dosen');
        }

        return back()->with('error', 'Login gagal!');
    }

    public function logout()
    {
        Session::forget('dosen');
        return redirect('/dosen/login');
    }
}
