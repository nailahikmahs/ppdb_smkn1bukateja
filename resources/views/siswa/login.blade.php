@extends('Login.main')
@include('partials.navbar')

<style>
     body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    .full-height-container {
        background: url('/img/smk.jpg') no-repeat center center;
        background-size: cover;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card {
        background: rgba(255, 255, 255, 0.8); /* Efek transparansi */
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="full-height-container">
    <div class="card p-4" style="max-width: 400px; width: 100%;">
        <h3 class="text-center mb-4">Login Admin</h3>

        <!-- Notifikasi -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <!-- Menampilkan Error -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form Login -->
        <form action="{{ route('login') }}" method="POST">
            @csrf

            <!-- Input Email -->
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="username" class="form-control @error('username') is-invalid @enderror" id="username"
                    name="username" value="{{ old('username') }}" required autofocus>
                @error('username')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Input Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    name="password" required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Tombol Login -->
            <button type="submit" class="btn btn-primary w-100 mb-2">Login</button>
        </form>

        <!-- Link Registrasi -->
        {{-- <div class="text-center mt-3">
            <p>Belum punya akun? <a href="{{ route('register') }}">Daftar disini</a></p>
        </div> --}}
    </div>
</div>
