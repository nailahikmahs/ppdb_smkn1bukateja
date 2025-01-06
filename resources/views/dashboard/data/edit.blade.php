

@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Edit Data Pendaftar</h1>

        <form action="{{ route('pendaftar.update', $pendaftar->pendaftar_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" value="{{ $pendaftar->nama_lengkap }}" required>
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" value="{{ $pendaftar->username }}" required>
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" required>
                    <option value="L" {{ $pendaftar->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-Laki</option>
                    <option value="P" {{ $pendaftar->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nik_anak">NIK Anak</label>
                <input type="text" name="nik_anak" class="form-control" value="{{ $pendaftar->nik_anak }}" required>
            </div>

            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" value="{{ $pendaftar->tgl_lahir }}" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
@endsection
