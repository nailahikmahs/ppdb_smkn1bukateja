<?php
namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    public function index(Request $request)
    {
        // Menangani pencarian berdasarkan nama atau NIK
       // Menangani pencarian berdasarkan nama atau NIK
$query = Pendaftar::query();

// Jika ada parameter pencarian, filter berdasarkan nama_lengkap, nik_anak, atau jenis_kelamin
if ($request->has('search') && !empty($request->search)) {
    $searchTerm = $request->search;

    // Gunakan closure untuk mengelompokkan kondisi OR
    $query->where(function ($q) use ($searchTerm) {
        $q->where('nama_lengkap', 'like', "%{$searchTerm}%")
          ->orWhere('nik_anak', 'like', "%{$searchTerm}%")
          ->orWhere('jenis_kelamin', 'like', "%{$searchTerm}%");
    });
}

// Ambil data pendaftar setelah difilter berdasarkan pencarian
$pendaftar = $query->get();


        // Kirimkan data ke view
        return view('dashboard.data.data_pendaftar', compact('pendaftar'));
    }

    public function formulir()
    {
        dd("test");
    }

    public function create()
    {
        return view('dashboard.data.create_pendaftar'); // Halaman form tambah data
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'pendaftar_id' => 'required|string|unique:pendaftar,pendaftar_id',
            'periode_id' => 'nullable|integer',
            'nama_lengkap' => 'required|string|max:150',
            'username' => 'required|string|max:255',
            'password' => 'required|string|max:6',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'nik_anak' => 'required|string|max:30',
            'tempat_lahir' => 'required|string|max:100',
            'tgl_lahir' => 'required|date',
            'asal_sekolah' => 'required|string|max:150',
        ]);

        // Menyimpan data pendaftar ke dalam database
        Pendaftar::create($validated);

        // Redirect ke halaman data pendaftar dengan pesan sukses
        return redirect()->route('data.pendaftar')->with('success', 'Data berhasil ditambahkan.');
     }

     //Menampilkan halaman edit pendaftar
     public function edit($id)
     {
         $pendaftar = Pendaftar::findOrFail($id);
         return view('dashboard.data.edit', compact('pendaftar'));
     }
     
     public function destroy($id)
     {
         $pendaftar = Pendaftar::find($id);
     
         if (!$pendaftar) {
             return redirect()->route('data.pendaftar')->with('error', 'Data tidak ditemukan.');
         }
     
         $pendaftar->delete();
     
         return redirect()->route('data.pendaftar')->with('success', 'Data berhasil dihapus.');
     }
     
}
