@extends('login.main') <!-- Menggunakan layout utama -->
<style>
    .footer {
        background-color: #333;
        /* Background footer */
    }

    .history {
        background-color: #f0f8ff;
        /* Background pada section history */
        padding: 2rem;
        border-radius: 10px;
    }

    a.btn:hover {
        transform: scale(1.05);
        /* Membesarkan tombol 10% */
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        /* Meningkatkan bayangan agar tombol terlihat lebih terangkat */
    }

    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        /* Menambahkan transisi untuk zoom dan shadow */
    }

    .card:hover {
        transform: scale(1.1);
        /* Memperbesar card saat hover */
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        /* Memberikan efek bayangan saat hover */
    }


    .card-img-top {
        width: 100%;
        height: 100%;
        object-fit: contain;
        /* Menjaga gambar agar tidak terpotong */
        display: block;
    }
</style>


<!-- Carousel Section -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img/smk.jpg') }}" class="d-block w-100 img-fluid" alt="Gambar 1"
                style="max-height: 1000px; object-fit: cover;">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/smkk.jpg') }}" class="d-block w-100 img-fluid" alt="Gambar 2"
                style="max-height: 1000px; object-fit: cover;">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

</div>

<div class="container py-5">
    <!-- Header Section -->
    <header class="text-center mb-5 p-5 rounded shadow" id="tentang"
        style="background: linear-gradient(to right, #36d1dc, #5b86e5); color: white; padding: 4rem 2rem; display: flex; flex-direction: column; justify-content: center; min-height: 30vh; ">
        <h1 class="display-4 fw-bold mb-4">Tentang Sekolah Kami</h1>

        <div class="d-flex justify-content-center mb-4">
            <div class="d-flex align-items-center me-4">
                <i class="fas fa-phone-alt fa-2x me-2"></i>
                <span>0286476110 (No Telepon)</span>
            </div>
            <div class="d-flex align-items-center">
                <i class="fab fa-whatsapp fa-2x me-2"></i>
                <span>089618092004 (No WA)</span>
            </div>
        </div>

        <p class="lead mt-3">
            <i class="fas fa-map-marker-alt"></i>
            Jl. Raya Purwandaru - Bukateja, Dusun 5, Majasari, Kec. Purbalingga, Kabupaten Purbalingga, Jawa Tengah
            53382
        </p>
    </header>
</div>




<!-- Sambutan Kepala Sekolah -->
<section class="history mb-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h3>Sambutan Kepala Sekolah</h3>
            <p>Selamat Datang di SMK Negeri 1 Bukateja!</p>
            <p>Salam sejahtera untuk seluruh warga SMK Negeri 1 Bukateja,</p>
            <p>Sebagai kepala sekolah, saya dengan bangga menyambut Anda di website resmi sekolah kita. SMK Negeri 1
                Bukateja berkomitmen untuk menyediakan pendidikan berkualitas yang tidak hanya membekali siswa
                dengan pengetahuan dan keterampilan, tetapi juga membentuk karakter yang tangguh dan berintegritas.
            </p>
            <p>Kami percaya bahwa pendidikan adalah kunci untuk membuka pintu masa depan yang cerah. Di sini, kami
                tidak hanya menekankan pada pencapaian akademis, tetapi juga mengembangkan potensi individu dalam
                berbagai aspek kehidupan. Dukungan dari seluruh tenaga pendidik dan staf administratif kami
                senantiasa hadir untuk mendampingi setiap langkah perkembangan siswa.</p>
            <p>Melalui website ini, kami berharap dapat memberikan informasi yang bermanfaat bagi seluruh
                stakeholder sekolah, termasuk siswa, orang tua, dan masyarakat luas. Kami juga mengundang Anda untuk
                terlibat aktif dalam kegiatan sekolah dan membangun komunitas pendidikan yang inklusif dan berdaya
                saing tinggi.</p>
            <p>Mari bersama-sama menciptakan masa depan yang cerah bagi generasi penerus bangsa. Terima kasih atas
                kunjungan Anda di website SMK Negeri 1 Bukateja.</p>
            <p>Hormat kami,<br><strong>Sutowo, S.Pd., M.M</strong><br>Kepala Sekolah SMK Negeri 1 Bukateja</p>
        </div>
        <div class="col-md-6 text-center">
            <img src="{{ asset('img/kepsek.png') }}" alt="Kepala Sekolah" class="img-fluid rounded-circle shadow-lg"
                style="max-width: 300px;">
        </div>
    </div>
</section>

<section class="history mb-5">
    <div class="container">
        <div class="row">
            <!-- Visi -->
            <div class="col-md-6 mb-4">
                <div class="p-4 shadow rounded bg-light">
                    <h3 class="fw-bold text-center" style="color: #5b86e5;">Visi</h3>
                    <p class="mt-3 text-center">
                        Menjadikan SMK Unggulan yang menghasilkan Tamatan Berkarakter, Kompeten, Kompetitif, dan
                        Berwawasan Lingkungan.
                    </p>
                </div>
            </div>
            <!-- Misi -->
            <div class="col-md-6">
                <div class="p-4 shadow rounded bg-light">
                    <h3 class="fw-bold text-center" style="color: #5b86e5;">Misi</h3>
                    <ul class="mt-3" style="list-style: disc; padding-left: 1.5rem;">
                        <li>Menghasilkan tamatan yang berkepribadian dan berakhlak mulia.</li>
                        <li>Melaksanakan pendidikan dan pelatihan secara optimal dalam iklim pembelajaran yang kondusif.
                        </li>
                        <li>Menyiapkan tenaga terampil profesional sesuai kompetensi keahlian.</li>
                        <li>Menyiapkan tamatan yang mampu bersaing di dunia kerja.</li>
                        <li>Mengembangkan kultur sekolah sesuai norma dan nilai budaya Indonesia.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Program Keahlian -->

<section class="programs mb-5">
    <div class="container">
        <h2 class="text-center mb-4">Program Keahlian</h2>
        <div class="row g-4">
            <!-- Program 1 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-lg border-0 text-center">
                    <img src="img/dpib.png" class="card-img-top img-fluid mx-auto p-3" alt="Desain dan Permodelan Informasi Bangunan" style="max-height: 150px;">
                    <div class="card-body">
                        <h5 class="card-title">DPIB</h5>
                        <p class="card-text">Desain dan Permodelan Informasi Bangunan</p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dpibModal">Lihat Detail</button>
                    </div>
                </div>
            </div>

            <!-- Modal for DPIB -->
            <div class="modal fade" id="dpibModal" tabindex="-1" aria-labelledby="dpibModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="dpibModalLabel">Desain dan Permodelan Informasi Bangunan (DPIB)</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Program ini melatih siswa untuk menguasai keterampilan dalam desain bangunan menggunakan perangkat lunak BIM (Building Information Modeling), serta mengembangkan kemampuan dalam permodelan struktur dan visualisasi arsitektural.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Program 2 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-lg border-0 text-center">
                    <img src="img/bsn.png" class="card-img-top img-fluid mx-auto p-3" alt="Busana" style="max-height: 150px;">
                    <div class="card-body">
                        <h5 class="card-title">BSN</h5>
                        <p class="card-text">Busana</p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bsnModal">Lihat Detail</button>
                    </div>
                </div>
            </div>

            <!-- Modal for BSN -->
            <div class="modal fade" id="bsnModal" tabindex="-1" aria-labelledby="bsnModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="bsnModalLabel">Busana (BSN)</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Program ini mengajarkan keterampilan dalam desain busana, pola, dan penjahitan. Siswa dilatih untuk memahami tren mode serta teknik pembuatan busana yang berkualitas.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Program 3 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-lg border-0 text-center">
                    <img src="img/tkr.png" class="card-img-top img-fluid mx-auto p-3" alt="Teknik Otomotif" style="max-height: 150px;">
                    <div class="card-body">
                        <h5 class="card-title">TO</h5>
                        <p class="card-text">Teknik Otomotif</p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tkrModal">Lihat Detail</button>
                    </div>
                </div>
            </div>

            <!-- Modal for TKR -->
            <div class="modal fade" id="tkrModal" tabindex="-1" aria-labelledby="tkrModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tkrModalLabel">Teknik Otomotif (TO)</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Program ini fokus pada penguasaan teknik perawatan dan perbaikan kendaraan bermotor, serta pengetahuan tentang teknologi otomotif terbaru.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Program 4 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-lg border-0 text-center">
                    <img src="img/tkj.png" class="card-img-top img-fluid mx-auto p-3" alt="Teknik Jaringan Komputer dan Telekomunikasi" style="max-height: 150px;">
                    <div class="card-body">
                        <h5 class="card-title">TJKT</h5>
                        <p class="card-text">Teknik Jaringan Komputer dan Telekomunikasi</p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tkjModal">Lihat Detail</button>
                    </div>
                </div>
            </div>

            <!-- Modal for TJKT -->
            <div class="modal fade" id="tkjModal" tabindex="-1" aria-labelledby="tkjModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tkjModalLabel">Teknik Jaringan Komputer dan Telekomunikasi (TJKT)</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Program ini mengajarkan siswa tentang instalasi, konfigurasi, dan pemeliharaan jaringan komputer serta sistem telekomunikasi yang digunakan dalam dunia industri.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Program 5 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-lg border-0 text-center">
                    <img src="img/bcf.png" class="card-img-top img-fluid mx-auto p-3" alt="Broadcasting dan Perfilman" style="max-height: 150px;">
                    <div class="card-body">
                        <h5 class="card-title">BCF</h5>
                        <p class="card-text">Broadcasting dan Perfilman</p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bcfModal">Lihat Detail</button>
                    </div>
                </div>
            </div>

            <!-- Modal for BCF -->
            <div class="modal fade" id="bcfModal" tabindex="-1" aria-labelledby="bcfModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="bcfModalLabel">Broadcasting dan Perfilman (BCF)</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Program ini melatih siswa dalam produksi video, editing, serta penyiaran melalui media elektronik baik radio maupun televisi.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Program 6 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-lg border-0 text-center">
                    <img src="img/rpl.png" class="card-img-top img-fluid mx-auto p-3" alt="Pengembangan Perangkat Lunak dan Gim" style="max-height: 150px;">
                    <div class="card-body">
                        <h5 class="card-title">PPLG</h5>
                        <p class="card-text">Pengembangan Perangkat Lunak dan Gim</p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#rplModal">Lihat Detail</button>
                    </div>
                </div>
            </div>

            <!-- Modal for RPL -->
            <div class="modal fade" id="rplModal" tabindex="-1" aria-labelledby="rplModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="rplModalLabel">Pengembangan Perangkat Lunak dan Gim (PPLG)</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Program ini fokus pada pengembangan perangkat lunak dan aplikasi gim, mencakup pemrograman, desain, dan pengujian aplikasi perangkat lunak serta gim.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>






<!-- Ekstrakurikuler -->
<section class="extracurricular mb-5">
    <div class="container">
        <h2 class="text-center mb-4">Ekstrakurikuler</h2>
        <div class="row g-4">
            <!-- Ekstrakurikuler 1 -->
            <div class="col-md-4">
                <div class="extracurricular-item h-100 bg-light border shadow-sm rounded">
                    <img src="{{ asset('img/film.jpg') }}" class="img-fluid rounded-top" alt="BCF"
                        style="object-fit: cover; width: 500px; height: 200px;">
                    <div class="p-3">
                        <h5 class="text-center">BCF</h5>
                        <p class="text-muted">Melatih siswa dalam kemandirian, kerja sama tim, dan keterampilan kepramukaan.</p>
                    </div>
                </div>
            </div>
            <!-- Ekstrakurikuler 2 -->
            <div class="col-md-4">
                <div class="extracurricular-item h-100 bg-light border shadow-sm rounded">
                    <img src="{{ asset('img/paskibra.jpg') }}" class="img-fluid rounded-top" alt="Paskibra"
                        style="object-fit: cover; height: 200px;">
                    <div class="p-3">
                        <h5 class="text-center">Paskibra</h5>
                        <p class="text-muted">Menumbuhkan kedisiplinan dan jiwa kepemimpinan siswa melalui kegiatan baris-berbaris.</p>
                    </div>
                </div>
            </div>
            <!-- Ekstrakurikuler 3 -->
            <div class="col-md-4">
                <div class="extracurricular-item h-100 bg-light border shadow-sm rounded">
                    <img src="{{ asset('img/pmr.jpg') }}" class="img-fluid rounded-top" alt="PMR"
                        style="object-fit: cover; height: 200px;">
                    <div class="p-3">
                        <h5 class="text-center">PMR</h5>
                        <p class="text-muted">Mengembangkan jiwa kemanusiaan, kepedulian, dan rasa empati terhadap sesama.</p>
                    </div>
                </div>
            </div>
            <!-- Ekstrakurikuler 4 -->
            <div class="col-md-4">
                <div class="extracurricular-item h-100 bg-light border shadow-sm rounded">
                    <img src="{{ asset('img/rohis.jpg') }}" class="img-fluid rounded-top" alt="Rohis"
                        style="object-fit: cover; width: 500px; height: 200px;">
                    <div class="p-3">
                        <h5 class="text-center">Rohis</h5>
                        <p class="text-muted">Memperdalam dan memperkuat ajaran Islam untuk siswa.</p>
                    </div>
                </div>
            </div>
            <!-- Ekstrakurikuler 5 -->
            <div class="col-md-4">
                <div class="extracurricular-item h-100 bg-light border shadow-sm rounded">
                    <img src="{{ asset('img/rohis.jpg') }}" class="img-fluid rounded-top" alt="Rohis"
                        style="object-fit: cover; width: 500px; height: 200px;">
                    <div class="p-3">
                        <h5 class="text-center">Rohis</h5>
                        <p class="text-muted">Memperdalam dan memperkuat ajaran Islam untuk siswa.</p>
                    </div>
                </div>
            </div>
            <!-- Ekstrakurikuler 6 -->
            <div class="col-md-4">
                <div class="extracurricular-item h-100 bg-light border shadow-sm rounded">
                    <img src="https://via.placeholder.com/500x300" class="img-fluid rounded-top" alt="Marching Band"
                        style="object-fit: cover; height: 200px;">
                    <div class="p-3">
                        <h5 class="text-center">Marching Band</h5>
                        <p class="text-muted">Meningkatkan kemampuan bermusik dan kerja sama tim melalui kegiatan marching band.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<div class="container mt-5">
    <!-- Pengumuman PPDB menggunakan Alert -->
    <div class="alert alert-primary p-4 shadow-lg rounded">
        <h3 class="text-center mb-4">Jadwal PPDB Tahun 2024</h3>
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <strong>Pengumuman PPDB:</strong>
                <span class="badge bg-info text-dark">10 Juni 2024</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <strong>Pendaftaran Peserta:</strong>
                <span class="badge bg-info text-dark">15 s.d 18 Juni 2024</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <strong>Masa Seleksi:</strong>
                <span class="badge bg-info text-dark">18 s.d 24 Juni 2024</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <strong>Perubahan Pilihan:</strong>
                <span class="badge bg-info text-dark">24 – 25 Juni 2024</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <strong>Pengumuman Hasil:</strong>eb
                <span class="badge bg-info text-dark">01 Juli 2024</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <strong>Daftar Ulang:</strong>
                <span class="badge bg-info text-dark">03 s.d 12 Juli 2024</span>
            </li>
        </ul>
    </div>



    <!-- Judul dan Deskripsi -->
    <h2 class="text-center font-weight-bold mb-4" style="color: #5b86e5; font-size: 2rem;">Persyaratan Pendaftaran
        PPDB</h2>
    <p class="text-center text-muted mb-5" style="font-size: 1.2rem; line-height: 1.6;">Berikut persyaratan yang harus anda siapkan saat pendaftaran:</p>

    <!-- Daftar Persyaratan -->
    <div class="list-group shadow-lg rounded">
        <!-- Item 1 -->
        <li class="list-group-item d-flex align-items-center"
            style="border: 1px solid #e0e0e0; border-radius: 10px; margin-bottom: 10px;">
            <span class="badge bg-primary text-white mr-3"
                style="font-size: 1.25rem; padding: 0.75rem 1rem; border-radius: 50%;">1</span>
            <h5 class="mb-0" style="font-weight: 600; font-size: 1.15rem;">Surat keterangan nilai raport semester 1-5 yang diterbitkan oleh SMP/MTS
            </h5>
        </li>
        
        <!-- Item 2 -->
        <li class="list-group-item d-flex align-items-center"
            style="border: 1px solid #e0e0e0; border-radius: 10px; margin-bottom: 10px;">
            <span class="badge bg-primary text-white mr-3"
                style="font-size: 1.25rem; padding: 0.75rem 1rem; border-radius: 50%;">2</span>
            <h5 class="mb-0" style="font-weight: 600; font-size: 1.15rem;">Ijazah SMP / MTS atau surat keterangan lulus ( SKL) </h5>
        </li>
         <!--item 3-->
         <li class="list-group-item d-flex align-items-center"
         style="border: 1px solid #e0e0e0; border-radius: 10px; margin-bottom: 10px;">
         <span class="badge bg-primary text-white mr-3"
             style="font-size: 1.25rem; padding: 0.75rem 1rem; border-radius: 50%;">3</span>
         <h5 class="mb-0" style="font-weight: 600; font-size: 1.15rem;">Menyertakan Akte Kelahiran</h5>
     </li>
        <!--item 4-->
        <li class="list-group-item d-flex align-items-center"
            style="border: 1px solid #e0e0e0; border-radius: 10px; margin-bottom: 10px;">
            <span class="badge bg-primary text-white mr-3"
                style="font-size: 1.25rem; padding: 0.75rem 1rem; border-radius: 50%;">4</span>
            <h5 class="mb-0" style="font-weight: 600; font-size: 1.15rem;">Menyertakan KK</h5>
        </li>
        <!--item 5-->
        <li class="list-group-item d-flex align-items-center"
            style="border: 1px solid #e0e0e0; border-radius: 10px; margin-bottom: 10px;">
            <span class="badge bg-primary text-white mr-3"
                style="font-size: 1.25rem; padding: 0.75rem 1rem; border-radius: 50%;">5</span>
            <h5 class="mb-0" style="font-weight: 600; font-size: 1.15rem;">Menyertakan Piagam Prestasi(Bagi Yang Memiliki)</h5>
        </li>
        <!--item 6-->
        <li class="list-group-item d-flex align-items-center"
            style="border: 1px solid #e0e0e0; border-radius: 10px; margin-bottom: 10px;">
            <span class="badge bg-primary text-white mr-3"
                style="font-size: 1.25rem; padding: 0.75rem 1rem; border-radius: 50%;">6</span>
            <h5 class="mb-0" style="font-weight: 600; font-size: 1.15rem;">Menyertakan KIP, PIP atau sejenisnya</h5>
        </li>

        <!-- Informasi Selanjutnya -->
        <li class="list-group-item" style="border: 1px solid #e0e0e0; border-radius: 10px;">
            <h5 class="mb-2" style="font-weight: 600; font-size: 1.15rem; text-align: center;">Informasi Selanjutnya:</h5>
            <p class="mb-3" style="font-size: 1.1rem; color: #333; text-align: center;">
                Selalu pantau akun Telegram dan grup WhatsApp kami untuk informasi lebih lanjut.
            </p>
            <div class="d-flex justify-content-center">
                <a href="https://t.me/yourTelegramLink" target="_blank" class="btn btn-primary mx-2 d-flex align-items-center" style="border-radius: 20px; padding: 0.5rem 1rem;">
                    <i class="fab fa-telegram-plane me-2"></i> Telegram
                </a>
                <a href="https://chat.whatsapp.com/JNbCRDGEN1qLCUNU7IcRli" target="_blank" class="btn btn-success mx-2 d-flex align-items-center" style="border-radius: 20px; padding: 0.5rem 1rem;">
                    <i class="fab fa-whatsapp me-2"></i> WhatsApp
                </a>
            </div>
            
        </li>
        
    </div>

    <section class="cta mt-5 position-relative"
        style="
            background: url('img/ppdb.png') no-repeat center center; 
            background-size: contain; 
            color: #fff; 
            text-align: center; 
            padding: 4rem 0; 
            border-radius: 15px;">
        <div
            style="
            position: absolute; 
            top: 0; 
            left: 0; 
            width: 100%; 
            height: 100%; 
            background: rgba(93, 103, 104, 0.5); 
            z-index: 1; 
            border-radius: 15px;">
        </div>
        <div style="position: relative; z-index: 2;" id="daftar_sekarang">
            <h2 style="font-size: 2.5rem; font-weight: bold; margin-bottom: 1rem;">Siap Mendaftar?</h2>
            <p style="font-size: 1.25rem; margin-bottom: 2rem;">Jangan lewatkan kesempatan untuk bergabung bersama
                kami.</p>
            <a href="{{ route('siswa.create') }}" class="btn btn-lg"
                style="background-color: #fff; color: #5b86e5; font-weight: bold; padding: 0.75rem 2rem; border-radius: 50px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                Daftar Sekarang
            </a>
        </div>
    </section>



</div>

<!-- Footer -->
<footer class="footer mt-5"
    style="background: linear-gradient(to left, #ff416c, #ff4b2b); color: #fff; text-align: center; padding: 1rem 0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                <a href="https://www.instagram.com/smkn1bukateja" target="_blank" class="text-white mx-2"
                    style="text-decoration: none;">
                    <i class="fab fa-instagram fa-2x"></i>
                </a>
                <a href="https://www.tiktok.com/@smkn1bukateja" target="_blank" class="text-white mx-2"
                    style="text-decoration: none;">
                    <i class="fab fa-tiktok fa-2x"></i>
                </a>
                <a href="https://www.facebook.com/smkn1bukateja.sch.id" target="_blank" class="text-white mx-2"
                    style="text-decoration: none;">
                    <i class="fab fa-facebook fa-2x"></i>
                </a>
                <a href="mailto:officialskansikamedia@gmail.com" class="text-white mx-2"
                    style="text-decoration: none;">
                    <i class="fas fa-envelope fa-2x"></i>
                </a>
            </div>
        </div>
    </div>
</footer>

</div>
</body>
