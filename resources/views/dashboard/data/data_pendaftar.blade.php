@extends('layouts.main')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        body {
            display: flex;
            min-height: 100vh;
            margin: 0;
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
            padding: 0;
        }

        .header {
            background-color: #020202;
            color: white;
            padding: 10px 20px;
            position: sticky;
            top: 0;
            z-index: 10;
            margin: 0;
        }

        h4 {
            margin: 0;
        }
    </style>

    <body>
        @if (auth()->user()->role == 'Admin')
            <div class="sidebar">
                <h3><a href="/">Skansika</a></h3>
                <ul class="list-unstyled">
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="{{ route('data.pendaftar') }}">Data Registrasi</a></li>
                    <li><a href="{{ route('data.pendaftar') }}">Data Pendaftar</a></li>
                    <li><a href="#">Data Pengumuman</a></li>
                </ul>
            </div>
        @endif

        <div class="content">
            <div class="header d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Admin PPDB</h4>
                <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                    @csrf
                    <button type="submit" class="btn btn-dark btn-sm w-100 mt-2">Logout</button>
                </form>
            </div>

            <div class="container">
                <h1>Data Pendaftar</h1>

                <form action="{{ route('data.pendaftar') }}" method="GET" class="mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search"
                            placeholder="Cari berdasarkan nama atau NIK..." value="{{ request()->query('search') }}"
                            style="border-radius: 20px 0 0 20px;">
                        <button class="btn btn-primary" type="submit"
                            style="border-radius: 0 20px 20px 0; font-weight: bold;">
                            <i class="fa fa-search"></i> Cari
                        </button>
                    </div>
                </form>

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
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('pendaftar.edit', $data->id) }}"
                                        class="btn btn-warning btn-sm">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>

                                    <!-- Tombol Hapus -->
                                    <form action="{{ route('pendaftar.destroy', $data->id) }}" method="POST"
                                        class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> Hapus
                                        </button>
                                    </form>
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
        </div>
    </body>
@endsection
