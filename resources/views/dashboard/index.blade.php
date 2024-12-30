<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin PPDB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            margin: 0; /* Menghilangkan margin default pada body */
        }
    
        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
        }
    
        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 15px;
            display: block;
        }
    
        .sidebar a:hover {
            background-color: #575d63;
        }
    
        .content {
            margin-left: 250px;
            width: 100%;
            padding: 0; /* Menghilangkan padding di bagian content jika tidak perlu */
        }
    
        .header {
            background-color: #020202;
            color: white;
            padding: 10px 20px; /* Sesuaikan padding header */
            position: sticky;
            top: 0;
            z-index: 10;
            margin: 0; /* Menghilangkan margin pada header */
        }
    
        h4 {
            margin: 0; /* Menghilangkan margin default pada heading */
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    @if (auth()->user()->role == 'Admin')
    <div class="sidebar">
        <h3><a href="/">Skansika</a></h3>
        <ul class="list-unstyled">
            <li><a href="/dashboard">Dashboard</a></li>
            <li><a href="{{ route('data.pendaftar') }}">Data Pendaftar</a></li>
            <li><a href="{{ route('data.pendaftar') }}">Data Pengumuman</a></li>
        </ul>
    </div>
    @endif

    <!-- Main Content -->
    <div class="content">
        <!-- Header -->
        <div class="header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Admin PPDB</h4>
            <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                @csrf
                <button type="submit" class="btn btn-dark btn-sm w-100 mt-2">
                    <i class="fas fa-sign-out-alt me-2"></i> Logout
                </button>
            </form>
        </div>

        <!-- Dashboard Summary -->
        <div class="container mt-4">
            <h1>Selamat Datang, Admin PPDB</h1>
            <p>Berikut adalah ringkasan PPDB:</p>

            <div class="row text-center mb-4">
                <div class="col-md-4">
                    <div class="card p-3 bg-primary text-white">
                        <h3>Total Pendaftar</h3>
                        <p>{{ $totalPendaftar ?? 0 }} Siswa</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 bg-success text-white">
                        <h3>Diterima</h3>
                        <p>{{ $totalDiterima ?? 0 }} Siswa</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 bg-danger text-white">
                        <h3>Ditolak</h3>
                        <p>{{ $totalDitolak ?? 0 }} Siswa</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
