<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showPersyaratan()
{
    return view('register.persyaratan');
}

    // menampilkan form registrasi siswa
    public function create()
    {
        return view('siswa.register'); // halaman form registrasi siswa
    }

    // menyimpan data registrasi siswa
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:150',
            'password' => 'required|string|min:6', // Menambahkan validasi untuk password
            'jenis_kelamin' => 'required|string|max:50',
            'nik_anak' => 'required|string|min:6',
            'tgl_lahir' => 'required|date',
        ]);
    
        // Menentukan tahun dan bulan
        $tahunBulan = date('Ymd'); // Format: 202412
    
        // Menghitung urutan nomor pendaftar
        $lastPendaftar = Pendaftar::where('pendaftar_id', 'like', $tahunBulan . '%')
                                  ->orderBy('pendaftar_id', 'desc')
                                  ->first();
    
        // Menentukan urutan berdasarkan nomor terakhir
        $urutan = $lastPendaftar ? intval(substr($lastPendaftar->pendaftar_id, -3)) + 1 : 1;
        $urutanStr = str_pad($urutan, 3, '0', STR_PAD_LEFT); // Format urutan dengan 3 digit
    
        // Membuat pendaftar_id
        $pendaftarId = $tahunBulan . $urutanStr; // Format: 202412001
    
        // Menyimpan data pendaftar baru
        Pendaftar::create([
            'pendaftar_id' => $pendaftarId,
            'nama_lengkap' => $validated['nama_lengkap'],
            'password' => bcrypt($validated['password']), // Enkripsi password sebelum disimpan
            'jenis_kelamin' => $validated['jenis_kelamin'],
            'nik_anak' => $validated['nik_anak'],
            'tgl_lahir' => $validated['tgl_lahir'],
        ]);
    
        return redirect()->route('login.siswa')->with('success', 'Registrasi berhasil.');
    }
    
    
}
