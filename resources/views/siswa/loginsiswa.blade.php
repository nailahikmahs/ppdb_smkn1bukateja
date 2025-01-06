@extends('login.main')
@include('partials.navbarr')

    <style>
        body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('/img/smk.jpg') no-repeat center center;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: rgba(255, 255, 255, 0.8); /* Transparansi background */
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .form-control {
            width: 100%;
            padding: 0.75rem;
            margin-top: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn-primary {
            width: 100%;
            padding: 0.75rem;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 1rem;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-success {
            width: 100%;
            padding: 0.75rem;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 1rem;
            cursor: pointer;
        }

        .btn-success:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: red;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Login Siswa</h2>

        {{-- Menampilkan pesan error jika ada --}}
        @if($errors->any())
            <div class="error-message">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Form Login --}}
        <form action="{{ route('loginSiswa') }}" method="POST">
            @csrf
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username" required>
        
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" required>
        
            <button type="submit" class="btn-primary">Login</button>
        
            <!-- Menambahkan margin top pada button "Kembali" untuk memberi jarak -->
            <a href="{{ route('siswa.create') }}" class="btn btn-success mt-3">Kembali</a>
        </form>
        
    </div>
</body>
</html>
