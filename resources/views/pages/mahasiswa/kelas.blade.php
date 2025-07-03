<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISCourse - Beranda</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        .object-fit-cover {
            object-fit: cover;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #004080;">
  <div class="container">
    <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="#">
  <i class="fas fa-graduation-cap fa-lg"></i> SISCourse</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarMain">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item"><a class="nav-link active" href="/">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="/mycourse">My Course</a></li>
        <li class="nav-item"><a class="nav-link" href="/keluhan">Layanan</a></li>
      </ul>

      <!-- Akun Dropdown -->
      <ul class="navbar-nav">
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
<main class="container my-5">
    <br>
    
<!-- Pemilihan Peminatan -->
    <section class="mb-5">
    <h4 class="text-center fw-semibold mb-4">Pilih Peminatan Anda</h4>
    <div class="row row-cols-1 row-cols-md-3 g-4">

        <!-- Software Development -->
        <div class="col">
            <div class="card h-100 shadow-sm text-center p-3">
                <img src="https://cdn-icons-png.flaticon.com/512/8759/8759087.png" class="mx-auto mb-3" alt="Software Dev" width="80">
                <div class="card-body">
                    <h5 class="card-title">Pemrograman Web</h5>
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
                    <span class="badge bg-primary">Data Engineering</span>
                    <p class="card-text text-muted">Semester 3</p>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="matakuliah/Ai" class="btn btn-primary w-100">Lihat Detail</a>
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
                    <span class="badge bg-primary">Software Engineering</span>
                    <p class="card-text text-muted">Semester 3</p>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="matakuliah/UIUX" class="btn btn-primary w-100">Lihat Detail</a>
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
                    <span class="badge bg-primary">Network Engineering</span>
                    <p class="card-text text-muted">Semester 3</p>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="matakuliah/network" class="btn btn-primary w-100">Lihat Detail</a>
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
                    <span class="badge bg-primary">Data Engineering</span>
                    <p class="card-text text-muted">Semester 3</p>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="matakuliah/data" class="btn btn-primary w-100">Lihat Detail</a>
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
                    <span class="badge bg-primary">Cyber Security</span>
                    <p class="card-text text-muted">Semester 3</p>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="matakuliah/cyber" class="btn btn-primary w-100">Lihat Detail</a>
                </div>
            </div>
        </div>

    </div>
</section>

</main>

<!-- Footer -->
<footer class="text-white text-center py-4" style="background-color: #004080;">
    <p class="mb-0">© {{ date('Y') }} SISCourse — Sistem Informasi Pembelajaran STT Nurul Fikri</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>