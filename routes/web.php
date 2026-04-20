<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| PUBLIC
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| AUTH (LOGIN / LOGOUT CUSTOM)
|--------------------------------------------------------------------------
*/
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

/*
|--------------------------------------------------------------------------
| DASHBOARD DEFAULT
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->get('/dashboard', function () {
    return redirect('/');
});

/*
|--------------------------------------------------------------------------
| MAHASISWA AREA (FULL)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:mahasiswa'])->group(function () {

    // 🔥 Dashboard Mahasiswa
    Route::get('/mahasiswa/dashboard', [KampusController::class, 'mahasiswa'])
        ->name('mahasiswa.dashboard');

    // 📚 KRS (Kartu Rencana Studi)
    Route::get('/mahasiswa/krs', [KampusController::class, 'krs'])
        ->name('mahasiswa.krs');

    // 🕒 Jadwal Kuliah
    Route::get('/mahasiswa/jadwal', [KampusController::class, 'jadwal'])
        ->name('mahasiswa.jadwal');

    // 👤 Profile Mahasiswa
    Route::get('/mahasiswa/profile', [ProfileController::class, 'edit'])
        ->name('mahasiswa.profile');

    Route::patch('/mahasiswa/profile', [ProfileController::class, 'update'])
        ->name('mahasiswa.profile.update');

    Route::delete('/mahasiswa/profile', [ProfileController::class, 'destroy'])
        ->name('mahasiswa.profile.delete');

});
