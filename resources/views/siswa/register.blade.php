@extends('Login.main')
@include('partials.navbar')

<style>
    .full-height-container {
        background: url('/img/smk.jpg') no-repeat center center;
        background-size: cover;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 5rem; /* Jarak antara navbar dan form */
    }

    .card {
        background: rgba(255, 255, 255, 0.85);
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 30px;
        max-width: 500px;
        width: 100%;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

  

    .invalid-feedback {
        font-size: 0.9rem;
    }

    .alert-danger {
        background-color: #f8d7da;
        color: #721c24;
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
    }
</style>

<div class="full-height-container">
    <div class="card">
        <h3 class="text-center mb-4">Registrasi</h3>

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

            <!-- Input Nama Lengkap -->
            <div class="mb-3">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control @error('nama_lengkap') is-invalid @enderror" value="{{ old('nama_lengkap') }}" required>
                @error('nama_lengkap')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Input Jenis Kelamin -->
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" 
                               type="radio" 
                               name="jenis_kelamin" 
                               id="laki_laki" 
                               value="Laki-Laki" 
                               {{ old('jenis_kelamin') == 'Laki-Laki' ? 'checked' : '' }}>
                        <label class="form-check-label" for="laki_laki">Laki-Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" 
                               type="radio" 
                               name="jenis_kelamin" 
                               id="perempuan" 
                               value="Perempuan" 
                               {{ old('jenis_kelamin') == 'Perempuan' ? 'checked' : '' }}>
                        <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                    @error('jenis_kelamin')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Input NIK Anak -->
            <div class="mb-3">
                <label for="nik_anak" class="form-label">NIK Anak</label>
                <input type="text" name="nik_anak" id="nik_anak" class="form-control @error('nik_anak') is-invalid @enderror" value="" required>

                @error('nik_anak')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Input Tanggal Lahir -->
            <div class="mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror" value="{{ old('tgl_lahir') }}" required>
                @error('tgl_lahir')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Input Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Register</button>
                <a href="/" class="btn btn-success">Kembali</a>
            </div>
            
            
        </form>
    </div>
</div>
