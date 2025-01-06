@extends('Login.main')
@include('partials.navbarr')

<style>
    body, html {

        padding: 0;
        height: 100%;
    }

    .full-height-container {
        
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                    url('/img/smk.jpg') no-repeat center center;
        background-size: cover;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 20px; /* Memberikan ruang pada layar kecil */
        margin-top: 50px;
    }

    .card {
        background: rgba(255, 255, 255, 0.95);
        border: none;
        border-radius: 15px;
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
        padding: 40px;
        width: 100%;
        max-width: 700px; /* Membatasi lebar card */
    }

    .card h3 {
        font-weight: bold;
        color: #333;
        text-align: center;
        margin-bottom: 30px;
    }

    .form-row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: space-between;
    }

    .form-column {
        flex: 1;
        min-width: 250px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
    }

    .btn-success {
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-success:hover {
        background-color: #218838;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
    }

    .invalid-feedback {
        font-size: 0.9rem;
        color: #e74c3c;
    }

    .alert-danger {
        background-color: #f8d7da;
        color: #721c24;
        border-left: 5px solid #f5c6cb;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 10px;
    }

    .small a {
        color: #007bff;
        text-decoration: none;
    }

    .small a:hover {
        text-decoration: underline;
    }

    .form-label {
        font-weight: bold;
        color: #555;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
</style>

<div class="full-height-container">
    <div class="card">
        <h3 class="text-center mb-4">Registrasi Siswa</h3>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('siswa.store') }}">
            @csrf

            <div class="form-row">
                <!-- Input Nama Lengkap -->
                <div class="form-column">
                    <div class="mb-3">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control @error('nama_lengkap') is-invalid @enderror" value="{{ old('nama_lengkap') }}" required>
                        @error('nama_lengkap')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Input Username -->
                <div class="form-column">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" required>
                        @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-row">
                <!-- Input Jenis Kelamin -->
                <div class="form-column">
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" 
                                       type="radio" 
                                       name="jenis_kelamin" 
                                       id="laki_laki" 
                                       value="Laki-Laki" 
                                       {{ old('jenis_kelamin') == 'Laki-Laki' ? 'checked' : '' }} >
                                <label class="form-check-label" for="laki_laki">Laki-Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" 
                                       type="radio" 
                                       name="jenis_kelamin" 
                                       id="perempuan" 
                                       value="Perempuan" 
                                       {{ old('jenis_kelamin') == 'Perempuan' ? 'checked' : '' }} >
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                            @error('jenis_kelamin')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Input NIK Anak -->
                <div class="form-column">
                    <div class="mb-3">
                        <label for="nik_anak" class="form-label">NIK Anak</label>
                        <input type="text" name="nik_anak" id="nik_anak" class="form-control @error('nik_anak') is-invalid @enderror" value="{{ old('nik_anak') }}" required>
                        @error('nik_anak')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-row">
                <!-- Input Tanggal Lahir -->
                <div class="form-column">
                    <div class="mb-3">
                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror" value="{{ old('tgl_lahir') }}" required>
                        @error('tgl_lahir')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Input Password -->
                <div class="form-column">
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="d-flex justify-content-between">
                <a href="/" class="btn btn-success">Kembali</a>
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
            <p class="text-center mt-3">
                <span>Sudah punya akun? </span>
                <a href="{{ route('loginSiswa') }}" class="text-primary">Silahkan login</a>
            </p>            
        </form>
    </div>
</div>
