@extends('layouts.main')

@section('content')
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

    <a href="{{ route('pendaftar.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th><input type="checkbox" id="select_all" onclick="toggleCheckboxes()"> Pilih Semua</th>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No. Telepon</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pendaftar as $data)
                <tr>
                    <td><input type="checkbox" class="select_checkbox" data-id="{{ $data->pendaftar_id }}"></td>
                    <td>{{ $data->pendaftar_id }}</td>
                    <td>{{ $data->nama_lengkap }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->no_telepon }}</td>
                    <td>{{ $data->status }}</td>
                    <td>
                        <button type="button" class="btn btn-success" onclick="changeStatus('{{ $data->pendaftar_id }}', 'accepted')">
                            <i class="fa fa-check"></i>
                        </button>
                        <button type="button" class="btn btn-danger" onclick="changeStatus('{{ $data->pendaftar_id }}', 'rejected')">
                            <i class="fa fa-times"></i>
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

    
    <script>
        // Fungsi untuk memilih semua checkbox
        function toggleCheckboxes() {
            const selectAll = document.getElementById('select_all');
            const checkboxes = document.querySelectorAll('.select_checkbox');
            checkboxes.forEach(checkbox => {
                checkbox.checked = selectAll.checked;
            });
        }
    
        // Fungsi untuk mengubah status pendaftar
        function changeStatus(id, status) {
            // Kirim request ke server untuk mengubah status pendaftar
            fetch('/pendaftar/' + id + '/update-status', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ status: status })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Status berhasil diubah!');
                    location.reload(); // Reload halaman untuk memperbarui status
                } else {
                    alert('Gagal mengubah status');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    </script>
    
</div>
@endsection
