<nav class="navbar navbar-expand-lg navbar-dark fixed-top"
    style="background: linear-gradient(to left, #ff416c, #ff4b2b);">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('img/logosmk.png') }}" alt="Logo SMK" style="width: 40px; height: 40px;" class="me-2">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('#tentang') ? 'active' : '' }}" href="#tentang">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('#pendaftaran') ? 'active' : '' }}" href="/login-siswa">Daftar
                        Sekarang</a>
                </li>
            </ul>



        </div>
    </div>
</nav>
