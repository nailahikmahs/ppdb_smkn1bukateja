<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // Menampilkan form login siswa
    public function formulir()
    {
        return view('siswa.formulir');
    }
}
