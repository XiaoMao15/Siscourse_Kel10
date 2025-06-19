<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISCourse - Beranda</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .object-fit-cover {
            object-fit: cover;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #004080;">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">SISCourse</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarMain">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/mycourse">My Course</a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="akunDropdown" role="button" data-bs-toggle="dropdown">
                        Akun
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="/profile/reset">Edit Foto Profil</a></li>
                        <li><a class="dropdown-item" href="/settings">Setting</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">@csrf
                                <button class="dropdown-item text-danger" type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<main class="container my-5">
    <!-- Judul -->
    <h2 class="fw-bold mb-4 text-center">Selamat Datang di SISCourse</h2>

    <!-- Carousel -->
    <div id="bannerCarousel" class="carousel slide mb-5" data-bs-ride="carousel" data-bs-interval="4000">
        <div class="carousel-inner rounded overflow-hidden" style="height: 300px;">
            <div class="carousel-item active">
                <img src="https://pasca.unand.ac.id/images/WEB_OK.png" class="d-block w-100 h-100 object-fit-cover" alt="Banner 1">
            </div>
            <div class="carousel-item">
                <img src="https://binus.ac.id/bandung/wp-content/uploads/2018/12/Web-Banner-Bandung-N-Ganti-Lagi-01.jpg" class="d-block w-100 h-100 object-fit-cover" alt="Banner 2">
            </div>
            <div class="carousel-item">
                <img src="https://binus.ac.id/bandung/wp-content/uploads/2018/07/Web-Banner-TPKS-Bandung-TT-03.jpg" class="d-block w-100 h-100 object-fit-cover" alt="Banner 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Sebelumnya</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Berikutnya</span>
        </button>
    </div>

    <!-- Pemilihan Peminatan -->
    <section class="mb-5">
    <h4 class="text-center fw-semibold mb-4">Pilih Peminatan Anda</h4>
    <div class="row row-cols-1 row-cols-md-3 g-4">

        <!-- Software Development -->
        <div class="col">
            <div class="card h-100 shadow-sm text-center p-3">
                <img src="https://cdn-icons-png.flaticon.com/512/8759/8759087.png" class="mx-auto mb-3" alt="Software Dev" width="80">
                <div class="card-body">
                    <h5 class="card-title">Muhammad Bintang Gunawan ST. M.KOM.</h5>
                    <p class="card-text text-muted">Pemrograman dan pengembangan perangkat lunak</p>
                    <span class="badge bg-primary">Software Engineering</span>
                    <p class="card-text text-muted">Semester 3</p>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="matakuliah/software" class="btn btn-primary w-100">Lihat Detail</a>
                </div>
            </div>
        </div>

        <!-- Artificial Intelligence -->
        <div class="col">
            <div class="card h-100 shadow-sm text-center p-3">
                <img src="https://cdn-icons-png.flaticon.com/512/10644/10644640.png" class="mx-auto mb-3" alt="AI" width="80">
                <div class="card-body">
                    <h5 class="card-title">Artificial Intelligence</h5>
                    <p class="card-text text-muted">Belajar teknologi AI modern termasuk machine learning dan NLP.</p>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
                </div>
            </div>
        </div>

        <!-- UI/UX Design -->
        <div class="col">
            <div class="card h-100 shadow-sm text-center p-3">
                <img src="https://cdn-icons-png.freepik.com/512/8448/8448634.png" class="mx-auto mb-3" alt="UI/UX" width="80">
                <div class="card-body">
                    <h5 class="card-title">UI/UX Design</h5>
                    <p class="card-text text-muted">Desain antarmuka pengguna yang menarik dan pengalaman pengguna optimal.</p>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
                </div>
            </div>
        </div>

        <!-- Networking -->
        <div class="col">
            <div class="card h-100 shadow-sm text-center p-3">
                <img src="https://cdn-icons-png.freepik.com/512/3470/3470508.png" class="mx-auto mb-3" alt="Networking" width="80">
                <div class="card-body">
                    <h5 class="card-title">Networking</h5>
                    <p class="card-text text-muted">Pelajari dasar hingga lanjut jaringan komputer dan pengaturannya.</p>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
                </div>
            </div>
        </div>

        <!-- Data Science -->
        <div class="col">
            <div class="card h-100 shadow-sm text-center p-3">
                <img src="https://cdn-icons-png.flaticon.com/512/4824/4824797.png" class="mx-auto mb-3" alt="Data Science" width="80">
                <div class="card-body">
                    <h5 class="card-title">Data Science</h5>
                    <p class="card-text text-muted">Analisis dan visualisasi data untuk pengambilan keputusan berbasis informasi.</p>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
                </div>
            </div>
        </div>

        <!-- Cyber Security -->
        <div class="col">
            <div class="card h-100 shadow-sm text-center p-3">
                <img src="https://cdn-icons-png.flaticon.com/512/2092/2092663.png" class="mx-auto mb-3" alt="Cyber Security" width="80">
                <div class="card-body">
                    <h5 class="card-title">Cyber Security</h5>
                    <p class="card-text text-muted">Fokus pada keamanan data, sistem, dan teknik proteksi digital.</p>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Daftar Dosen -->
<section class="mb-5">
    <h4 class="text-center fw-semibold mb-4">Daftar Dosen</h4>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Dosen 1 -->
        <div class="col">
            <div class="card h-100 shadow-sm text-center p-3">
                <img src="https://via.placeholder.com/100x100?text=DR" class="rounded-circle mx-auto mb-3" width="100" height="100" alt="Dosen 1">
                <div class="card-body">
                    <h5 class="card-title">Dr. Rahmat, S.Kom., M.T.I.</h5>
                    <p class="card-text text-muted">Spesialis Pemrograman & Keamanan Jaringan</p>
                </div>
            </div>
        </div>

        <!-- Dosen 2 -->
        <div class="col">
            <div class="card h-100 shadow-sm text-center p-3">
                <img src="https://via.placeholder.com/100x100?text=AN" class="rounded-circle mx-auto mb-3" width="100" height="100" alt="Dosen 2">
                <div class="card-body">
                    <h5 class="card-title">Andini, M.Kom</h5>
                    <p class="card-text text-muted">Ahli UI/UX Design dan Data Science</p>
                </div>
            </div>
        </div>

        <!-- Dosen 3 -->
        <div class="col">
            <div class="card h-100 shadow-sm text-center p-3">
                <img src="https://via.placeholder.com/100x100?text=AF" class="rounded-circle mx-auto mb-3" width="100" height="100" alt="Dosen 3">
                <div class="card-body">
                    <h5 class="card-title">Ahmad Fauzan, M.T</h5>
                    <p class="card-text text-muted">Fokus pada Jaringan & Keamanan Sistem</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Informasi -->
    <section class="text-center mb-5">
        <h4 class="fw-semibold mb-4">Informasi Terbaru</h4>
        <p class="text-muted">Dapatkan informasi terbaru seputar kursus, acara, dan pengumuman penting lainnya.</p>
        <a href="/news" class="btn btn-secondary">Lihat Semua Berita</a>
    </section>

    <!-- Testimoni -->
    <section class="text-center">
        <h4 class="fw-semibold mb-4">Testimoni Peserta</h4>
        <p class="text-muted">Apa kata peserta tentang pengalaman mereka di SISCourse?</p>
        <a href="/testimonials" class="btn btn-secondary">Baca Testimoni</a>
    </section>


</main>

<!-- Footer -->
<footer class="text-white text-center py-4" style="background-color: #004080;">
    <p class="mb-0">© {{ date('Y') }} SISCourse — Sistem Informasi Pembelajaran STT Nurul Fikri</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
