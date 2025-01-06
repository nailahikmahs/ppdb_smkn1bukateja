@extends('layouts.main')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

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
    <script>
        function changeStatus(pendaftarId, status) {
            if (confirm('Apakah Anda yakin ingin mengubah status?')) {
                fetch(`/pendaftar/${pendaftarId}/update-status`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'  // Pastikan token CSRF ditambahkan
                    },
                    body: JSON.stringify({ status: status })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Status berhasil diubah!');
                        location.reload();  // Refresh halaman untuk melihat perubahan
                    } else {
                        alert('Gagal mengubah status!');
                    }
                })
                .catch(error => {
                    alert('Terjadi kesalahan!');
                    console.error('Error:', error);
                });
            }
        }
    </script>
    
</head>
<body>

    <!-- Sidebar -->
    @if (auth()->user()->role == 'Admin')
        
    
    <div class="sidebar">
        <h3><a href="/">Skansika</a></h3>
        <ul class="list-unstyled">
            <li><a href="/dashboard">Dashboard</a></li>
            {{-- <li><a href="{{ route('pendaftar.create') }}">Data Pendaftar</a></li> --}}
            <li><a href="{{ route('data.pendaftar') }}">Data Pendaftar</a></li>
            <li><a href="#">Data Pengumuman</a></li>
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
                    <button type="submit" class="btn btn-dark btn-sm w-100 mt-2">Logout</button>
                </form>
        </div>
<div class="container">
    <h1>Data Pendaftar</h1>

    
    <!-- Form Pencarian -->
<form action="{{ route('data.pendaftar') }}" method="GET" class="mb-3">
    <div class="input-group">
        <input type="text" class="form-control" name="search" placeholder="Cari berdasarkan nama atau NIK..." value="{{ request()->query('search') }}" style="border-radius: 20px 0 0 20px;">
        <button class="btn btn-primary" type="submit" style="border-radius: 0 20px 20px 0; font-weight: bold;">
            <i class="fa fa-search"></i> Cari
        </button>
    </div>
</form>


    {{-- <a href="{{ route('pendaftar.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif --}}

    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Kode Pendaftar</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Jenis Kelamin</th>
                <th>NIK</th>
                <th>Tanggal Lahir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pendaftar as $data)
                <tr>
                    <td>{{ $data->pendaftar_id }}</td>
                    <td>{{ $data->nama_lengkap }}</td>
                    <td>{{ $data->username }}</td>
                    <td>{{ $data->jenis_kelamin }}</td>
                    <td>{{ $data->nik_anak }}</td>
                    <td>{{ $data->tgl_lahir }}</td>
                    <td>
                        <button type="button" class="btn btn-warning" onclick="changeStatus({{ $data->pendaftar_id }}, 'accepted')">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-danger" onclick="changeStatus({{ $data->pendaftar_id }}, 'rejected')">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                    
                    
                    
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Tidak ada data pendaftar.</td>
                </tr>
            @endforelse
        </tbody>
        
    </table>
</div>
@endsection
