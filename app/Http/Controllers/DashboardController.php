<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftar;
class DashboardController extends Controller
{
    // Method untuk menampilkan dashboard
    public function index()
    {
        return view('dashboard.dashboard');  // Mengarah ke resources/views/dashboard/dashboard.blade.php
        $totalPendaftar = Pendaftar::count();
        $totalDiterima = Pendaftar::where('status', 'diterima')->count();
        $totalDitolak = Pendaftar::where('status', 'ditolak')->count();
        $pendaftar = Pendaftar::all();

        return view('index', compact('totalPendaftar', 'totalDiterima', 'totalDitolak', 'pendaftar'));
    }
    
    public function index2()
    {
        dd("test");
        return view('dashboard.dashboard');  // Mengarah ke resources/views/dashboard/dashboard.blade.php
        $totalPendaftar = Pendaftar::count();
        $totalDiterima = Pendaftar::where('status', 'diterima')->count();
        $totalDitolak = Pendaftar::where('status', 'ditolak')->count();
        $pendaftar = Pendaftar::all();

        return view('index', compact('totalPendaftar', 'totalDiterima', 'totalDitolak', 'pendaftar'));
    }
}
