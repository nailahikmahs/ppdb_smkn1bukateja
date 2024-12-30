<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftar;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginsiswaController extends Controller
{
    // Menampilkan form login siswa
    public function showLoginForm()
    {
        return view('siswa.loginsiswa');
    }

    // Proses login siswa
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'pendaftar_id' => 'required|integer',
            'password' => 'required|string|min:6',
        ]);

        // Mencari pendaftar berdasarkan pendaftar_id
        $pendaftar = Pendaftar::where('pendaftar_id', $request->pendaftar_id)->first();

        if ($pendaftar && Hash::check($request->password, $pendaftar->password)) {
            // Jika berhasil login, set session dan arahkan ke halaman yang diinginkan
            Session::put('pendaftar_id', $pendaftar->pendaftar_id);
            return redirect()->route('homeSiswa'); // Ganti dengan route tujuan setelah login
        }

        // Jika login gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors(['password' => 'Pendaftar ID atau password salah']);
    }

    // Logout siswa
    public function logout()
    {
        Session::forget('pendaftar_id');
        return redirect()->route('loginSiswa'); // Ganti dengan route login siswa
    }
}
