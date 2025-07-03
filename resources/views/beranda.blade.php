<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SISCourse - Beranda</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
    }
    .object-fit-cover {
      object-fit: cover;
    }
    .navbar-brand {
      font-size: 1.5rem;
    }
    .btn-secondary:hover {
      background-color: #003366;
      color: #fff;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #004080;">
  <div class="container">
    <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="#">
  <i class="fas fa-graduation-cap fa-lg"></i> SISCourse</a>
  <p></p>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarMain">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item"><a class="nav-link active" href="/">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="/mycourse">My Course</a></li>
        <li class="nav-item"><a class="nav-link" href="/keluhan">Layanan</a></li>
      </ul>

     <ul class="navbar-nav">
      <li class = 'nav-item'>
        <a class="nav-link" href="/login">Login</a>
      </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="akunDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Akun
          </a>
          <ul class="dropdown-menu dropdown-menu-end shadow rounded-3 animate__animated animate__fadeIn" aria-labelledby="akunDropdown">
            <li>
              <a class="dropdown-item" href="/profile/reset">
                <i class="bi bi-person-circle me-2"></i>Edit Foto Profil
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="/settings">
                <i class="bi bi-gear me-2"></i>Setting
              </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="{{ route('logout') }}" method="POST" class="px-3">
                @csrf
                <button class="btn btn-outline-danger w-100" type="submit">
                  <i class="bi bi-box-arrow-right me-1"></i> Logout
                </button>
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Main Content -->
<main class="container py-5">
  <h2 class="fw-bold text-center mb-5">Selamat Datang di <span class="text-primary">SISCourse</span></h2>

  <!-- Carousel -->
  <div id="bannerCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
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
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

<section class="mb-5 position-relative">
  <h4 class="text-center fw-semibold mb-4">Daftar Dosen Pengajar</h4>

  <div class="container position-relative">
    <div id="dosenCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Dosen 1 -->
            <div class="col">
              <div class="card h-100 text-center p-3 shadow-sm" data-bs-toggle="modal" data-bs-target="#modalDosen1" style="cursor: pointer;">
                <img src="https://cms.disway.id/uploads/large/289d220e2d55997ef7c5da249a1adaec.jpg" class="rounded mx-auto mb-3" width="120" height="120" alt="Dosen 1">
                <h5 class="card-title">Dr. Rahmat, S.Kom., M.T.I.</h5>
                <p class="text-muted">Pemrograman & Keamanan</p>
              </div>
            </div>
            <!-- Dosen 2 -->
            <div class="col">
              <div class="card h-100 text-center p-3 shadow-sm" data-bs-toggle="modal" data-bs-target="#modalDosen2" style="cursor: pointer;">
                <img src="https://cms.disway.id/uploads/large/289d220e2d55997ef7c5da249a1adaec.jpg" class="rounded mx-auto mb-3" width="120" height="120" alt="Dosen 2">
                <h5 class="card-title">Andini, M.Kom</h5>
                <p class="text-muted">UI/UX & Data Science</p>
              </div>
            </div>
            <!-- Dosen 3 -->
            <div class="col">
              <div class="card h-100 text-center p-3 shadow-sm" data-bs-toggle="modal" data-bs-target="#modalDosen3" style="cursor: pointer;">
                <img src="https://cms.disway.id/uploads/large/289d220e2d55997ef7c5da249a1adaec.jpg" class="rounded mx-auto mb-3" width="120" height="120" alt="Dosen 3">
                <h5 class="card-title">Ahmad Fauzan, M.T</h5>
                <p class="text-muted">Jaringan & Sistem</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <!-- Dosen 4 -->
          <div class="col">
            <div class="card h-100 text-center p-3 shadow-sm" data-bs-toggle="modal" data-bs-target="#modalDosen4" style="cursor: pointer;">
              <img src="https://jektvnews.disway.id/upload/5f21625613244cdf378d0e55200ddb18.jpg" class="rounded mx-auto mb-3" width="120" height="120" alt="Dosen 4">
              <h5 class="card-title">Asih Sari, M.T.</h5>
              <p class="text-muted">Basis Data & IoT</p>
            </div>
          </div>
          <!-- Dosen 5 -->
          <div class="col">
            <div class="card h-100 text-center p-3 shadow-sm" data-bs-toggle="modal" data-bs-target="#modalDosen5" style="cursor: pointer;">
              <img src="https://jektvnews.disway.id/upload/5f21625613244cdf378d0e55200ddb18.jpg" class="rounded mx-auto mb-3" width="120" height="120" alt="Dosen 5">
              <h5 class="card-title">Farhan Hidayat, M.Kom</h5>
              <p class="text-muted">Machine Learning</p>
            </div>
          </div>
          <!-- Dosen 6 -->
          <div class="col">
            <div class="card h-100 text-center p-3 shadow-sm" data-bs-toggle="modal" data-bs-target="#modalDosen6" style="cursor: pointer;">
              <img src="https://jektvnews.disway.id/upload/5f21625613244cdf378d0e55200ddb18.jpg" class="rounded mx-auto mb-3" width="120" height="120" alt="Dosen 6">
              <h5 class="card-title">Nina Nurlela, S.T., M.T.</h5>
              <p class="text-muted">Cloud Computing</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <!-- Dosen 7 -->
          <div class="col">
            <div class="card h-100 text-center p-3 shadow-sm" data-bs-toggle="modal" data-bs-target="#modalDosen7" style="cursor: pointer;">
              <img src="https://sinpo.id/storage/2024/02/bahlil-duga-ada-skenario-di-balik-petisi-civitas-academica-05022024-204203.jpg" class="rounded mx-auto mb-3" width="120" height="120" alt="Dosen 7">
              <h5 class="card-title">Muhammad Danis, M.Kom</h5>
              <p class="text-muted">Algoritma & Struktur Data</p>
            </div>
          </div>
          <!-- Dosen 8 -->
          <div class="col">
            <div class="card h-100 text-center p-3 shadow-sm" data-bs-toggle="modal" data-bs-target="#modalDosen8" style="cursor: pointer;">
              <img src="https://sinpo.id/storage/2024/02/bahlil-duga-ada-skenario-di-balik-petisi-civitas-academica-05022024-204203.jpg" class="rounded mx-auto mb-3" width="120" height="120" alt="Dosen 8">
              <h5 class="card-title">Laily Yusnia, M.T.I</h5>
              <p class="text-muted">Etika & Profesionalisme TI</p>
            </div>
          </div>
          <!-- Dosen 9 -->
          <div class="col">
            <div class="card h-100 text-center p-3 shadow-sm" data-bs-toggle="modal" data-bs-target="#modalDosen9" style="cursor: pointer;">
              <img src="https://sinpo.id/storage/2024/02/bahlil-duga-ada-skenario-di-balik-petisi-civitas-academica-05022024-204203.jpg" class="rounded mx-auto mb-3" width="120" height="120" alt="Dosen 9">
              <h5 class="card-title">Rizky Ramadhan, M.Kom</h5>
              <p class="text-muted">Teknologi Web & Mobile</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Navigasi kiri & kanan di sisi carousel -->
      <button class="carousel-control-prev position-absolute top-50 translate-middle-y start-0" type="button" data-bs-target="#dosenCarousel" data-bs-slide="prev" style="width: 45px;">
        <span class="carousel-control-prev-icon bg-dark rounded-circle p-2"></span>
        <span class="visually-hidden">Sebelumnya</span>
      </button>
      <button class="carousel-control-next position-absolute top-50 translate-middle-y end-0" type="button" data-bs-target="#dosenCarousel" data-bs-slide="next" style="width: 45px;">
        <span class="carousel-control-next-icon bg-dark rounded-circle p-2"></span>
        <span class="visually-hidden">Berikutnya</span>
      </button>
      <!-- Modal Dosen 1 -->
<div class="modal fade" id="modalDosen1" tabindex="-1" aria-labelledby="modalDosen1Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDosen1Label">Kelas oleh Dr. Rahmat</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p><strong>Mata Kuliah:</strong> Keamanan Jaringan</p>
        <p><strong>Waktu:</strong> Senin & Rabu, 09:00 - 10:40 WIB</p>
        <p><strong>Ruangan:</strong> Online via Zoom</p>
      </div>
      <div class="modal-footer">
        <a href="join_kelas.php?id=rahmat" class="btn btn-primary">Join Kelas</a>
        <a href="/tugas" class="btn btn-outline-secondary">Lihat Tugas</a>
      </div>
    </div>
  </div>
</div> <!-- <== Tambahkan penutup ini -->

    <!-- Modal Dosen 2 -->
<div class="modal fade" id="modalDosen2" tabindex="-1" aria-labelledby="modalDosen2Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDosen2Label">Kelas oleh Andini</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p><strong>Mata Kuliah:</strong> UI/UX & Data Science</p>
        <p><strong>Waktu:</strong> Rabu, 10:00 - 11:40 WIB</p>
        <p><strong>Ruangan:</strong> Zoom A</p>
      </div>
      <div class="modal-footer">
        <a href="join_kelas.php?id=andini" class="btn btn-primary">Join Kelas</a>
        <a href="tugas.php?dosen=andini" class="btn btn-outline-secondary">Lihat Tugas</a>
      </div>
    </div>
  </div>
</div>

<!-- Modal Dosen 3 -->
        <div class="modal fade" id="modalDosen3" tabindex="-1" aria-labelledby="modalDosen3Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDosen3Label">Kelas oleh Ahmad Fauzan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p><strong>Mata Kuliah:</strong> Jaringan & Sistem</p>
                <p><strong>Waktu:</strong> Kamis, 13:00 - 14:40 WIB</p>
                <p><strong>Ruangan:</strong> Zoom B</p>
            </div>
            <div class="modal-footer">
                <a href="join_kelas.php?id=fauzan" class="btn btn-primary">Join Kelas</a>
                <a href="tugas.php?dosen=fauzan" class="btn btn-outline-secondary">Lihat Tugas</a>
            </div>
            </div>
        </div>
        </div>
        <!-- Modal Dosen 4 -->
        <div class="modal fade" id="modalDosen4" tabindex="-1" aria-labelledby="modalDosen4Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDosen4Label">Kelas oleh Atih Sari</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p><strong>Mata Kuliah:</strong> Basis Data & IoT</p>
                <p><strong>Waktu:</strong> Jumat, 08:00 - 11:30 WIB</p>
                <p><strong>Ruangan:</strong> Zoom C</p>
            </div>
            <div class="modal-footer">
                <a href="join_kelas.php?id=atih sari" class="btn btn-primary">Join Kelas</a>
                <a href="tugas.php?dosen=atih sari" class="btn btn-outline-secondary">Lihat Tugas</a>
            </div>
            </div>
        </div>
        </div>
        <!-- Modal Dosen 5 -->
        <div class="modal fade" id="modalDosen5" tabindex="-1" aria-labelledby="modalDosen5Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDosen5Label">Kelas oleh Farhan Hidayat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p><strong>Mata Kuliah:</strong> Machine Learning</p>
                <p><strong>Waktu:</strong> Rabu, 14:30 - 16:50</p>
                <p><strong>Ruangan:</strong> Zoom Z</p>
            </div>
            <div class="modal-footer">
                <a href="join_kelas.php?id=farhan" class="btn btn-primary">Join Kelas</a>
                <a href="tugas.php?dosen=farhan" class="btn btn-outline-secondary">Lihat Tugas</a>
            </div>
            </div>
        </div>
        </div>
        <!-- Modal Dosen 6 -->
        <div class="modal fade" id="modalDosen6" tabindex="-1" aria-labelledby="modalDosen6Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDosen6Label">Nina Nurlela, S.T., M.T.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p><strong>Mata Kuliah:</strong> Cloud Computing</p>
                <p><strong>Waktu:</strong> Kamis, 08:00 - 10:30</p>
                <p><strong>Ruangan:</strong> Zoom J</p>
            </div>
            <div class="modal-footer">
                <a href="join_kelas.php?id=Nurlela" class="btn btn-primary">Join Kelas</a>
                <a href="tugas.php?dosen=nurlela" class="btn btn-outline-secondary">Lihat Tugas</a>
            </div>
            </div>
        </div>
        </div>
        <!-- Modal Dosen 7 -->
        <div class="modal fade" id="modalDosen7" tabindex="-1" aria-labelledby="modalDosen7Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDosen7Label">Muhammad Danis, M.Kom</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p><strong>Mata Kuliah:</strong> Algoritma & Struktur Data</p>
                <p><strong>Waktu:</strong> Senin, 08:00 - 16:00</p>
                <p><strong>Ruangan:</strong> Zoom R</p>
            </div>
            <div class="modal-footer">
                <a href="join_kelas.php?id=danis" class="btn btn-primary">Join Kelas</a>
                <a href="tugas.php?dosen=danis" class="btn btn-outline-secondary">Lihat Tugas</a>
            </div>
            </div>
        </div>
        </div>
         <!-- Modal Dosen 8 -->
        <div class="modal fade" id="modalDosen8" tabindex="-1" aria-labelledby="modalDosen8Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDosen8Label">Laily Yusnia, M.T.I</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p><strong>Mata Kuliah:</strong> Etika & Profesionalisme TI</p>
                <p><strong>Waktu:</strong> Selasa, 08:00 - 10:100</p>
                <p><strong>Ruangan:</strong> Zoom L</p>
            </div>
            <div class="modal-footer">
                <a href="join_kelas.php?id=yusnia" class="btn btn-primary">Join Kelas</a>
                <a href="tugas.php?dosen=yusnia" class="btn btn-outline-secondary">Lihat Tugas</a>
            </div>
            </div>
        </div>
        </div>
        <!-- Modal Dosen 9 -->
        <div class="modal fade" id="modalDosen9" tabindex="-1" aria-labelledby="modalDosen9Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDosen9Label">Rizky Ramadhan, M.Kom</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p><strong>Mata Kuliah:</strong> Teknologi Web & Mobile</p>
                <p><strong>Waktu:</strong> Rabu, 19:00 - 21:00</p>
                <p><strong>Ruangan:</strong> Zoom I</p>
            </div>
            <div class="modal-footer">
                <a href="join_kelas.php?id=rizky" class="btn btn-primary">Join Kelas</a>
                <a href="tugas.php?dosen=rizky" class="btn btn-outline-secondary">Lihat Tugas</a>
            </div>
            </div>
        </div>
        </div>
    </div>
  </div>
</section>

<!-- Informasi Terkini -->
<section class="py-5" style="background-color: #f1f7ff;">
  <div class="container">
    <h4 class="fw-bold text-center mb-4 text-primary">📰 Informasi Terkini</h4>

    <div class="text-center">
      <button class="btn btn-outline-primary fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#beritaCollapse" aria-expanded="false" aria-controls="beritaCollapse">
        Lihat Pengumuman 📢
      </button>
    </div>

    <div class="collapse mt-4" id="beritaCollapse">
      <div class="row justify-content-center">
        <div class="col-lg-10">

          <!-- Card 1 -->
          <div class="card shadow-sm border-start border-4 border-warning mb-4">
            <div class="card-body">
              <h5 class="card-title text-warning fw-semibold">📢 Hari ini libur!!</h5>
              <p class="card-text mb-1">Dalam rangka peringatan Hari Raya Idul Adha, semua kegiatan perkuliahan ditiadakan.</p>
              <p class="text-muted small mb-0">Diumumkan: 20 Juni 2025</p>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="card shadow-sm border-start border-4 border-info mb-4">
            <div class="card-body">
              <h5 class="card-title text-info fw-semibold">🎓 Webinar ‘Strategi Sukses Magang’</h5>
              <p class="card-text mb-1">Sabtu, 22 Juni 2025 pukul 09.00 WIB via Zoom. Terbuka untuk semua jurusan!</p>
              <p class="text-muted small mb-0">Daftar sebelum: 21 Juni 2025</p>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="card shadow-sm border-start border-4 border-success">
            <div class="card-body">
              <h5 class="card-title text-success fw-semibold">🆕 Kursus Baru: Laravel untuk Pemula</h5>
              <p class="card-text mb-1">Materi lengkap kini tersedia di My Course. Yuk mulai belajar dan dapatkan sertifikatnya!</p>
              <p class="text-muted small mb-0">Tersedia mulai: 20 Juni 2025</p>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</section>




  <!-- Testimoni -->
  <section class="text-center">
    <h4 class="fw-semibold mb-3">Testimoni Peserta</h4>
    <p class="text-muted">Lihat pengalaman belajar peserta lainnya di SISCourse.</p>
    <a href="/testimonials" class="btn btn-outline-primary">Baca Testimoni</a>
  </section>
</main>

<!-- About SISCourse -->
<section class="py-5" style="background: linear-gradient(135deg, #e0f0ff, #ffffff);">
  <div class="container">
    <div class="row align-items-center">
      <!-- Icon atau ilustrasi -->
      <div class="col-md-4 text-center mb-4 mb-md-0">
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135755.png" alt="SISCourse Icon" class="img-fluid" style="max-width: 150px;">
      </div>

      <!-- Konten teks -->
      <div class="col-md-8">
        <h4 class="fw-bold mb-3 text-primary">Tentang SISCourse</h4>
        <p class="text-muted mb-2">
          <strong>SISCourse</strong> adalah platform pembelajaran digital yang dibangun untuk mendukung mahasiswa dan dosen STT Terpadu Nurul Fikri dalam proses belajar-mengajar. Platform ini memungkinkan akses ke materi kursus, informasi akademik, serta fitur interaktif lainnya secara daring.
        </p>
        <p class="text-muted mb-3">
          Dengan desain yang ramah pengguna dan dukungan teknologi web modern, SISCourse bertujuan menciptakan suasana belajar yang efisien, inklusif, dan menyenangkan — baik di dalam maupun di luar ruang kelas.
        </p>
        <p class="mb-0">
          <a href="/about" class="btn btn-primary btn-sm">Pelajari Lebih Lanjut</a>
        </p>
      </div>
    </div>
  </div>
</section>



<!-- Footer -->
<footer class="text-white text-center py-4 mt-5" style="background-color: #004080;">
  <p class="mb-0">© {{ date('Y') }} SISCourse — Sistem Informasi Pembelajaran STT Nurul Fikri</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
