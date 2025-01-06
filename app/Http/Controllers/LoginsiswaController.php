<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

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
            'username' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);

        // Cek apakah username ada di tabel pendaftar
        $pendaftar = Pendaftar::where('username', $request->username)->first();
        // dd($pendaftar);


        // cek apakah pendaftar ada atau tidak
        if (isset($pendaftar)) {
            // dd($request->password);
            if (Hash::check($request->password, $pendaftar->password)) {
                // Password cocok
                // Cek apakah user sudah ada di tabel users
                $user = User::where('username', $pendaftar->username)->first();

                // Jika belum ada, buatkan data user baru di tabel users
                if (!$user) {
                    $user = User::create([
                        'name' => $pendaftar->nama_lengkap,
                        'username' => $pendaftar->username,
                        'password' => $pendaftar->password, // Password sudah terenkripsi di pendaftar
                        'role' => 'siswa', // Tambahkan role default
                    ]);
                }

                // Simpan sesi login
                Session::put('user_id', $user->id);

                // return redirect()->route('pendaftar.formulir'); // Arahkan ke halaman siswa
                return redirect()->intended('/dashboard2');
            }else{
                // Jika password salah
                return back()->withErrors(['username' => 'Password salah']);
            }
        } else {
            // Jika pendaftar tidak ada
            return back()->withErrors(['username' => 'Username tidak ditemukan']);
        }
    }

    // Logout
    public function logout()
    {
        Session::forget('user_id');
        return redirect()->route('loginSiswa');
    }
}
