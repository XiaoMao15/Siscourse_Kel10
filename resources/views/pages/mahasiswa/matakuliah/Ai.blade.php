<!DOCTYPE html>
<html lang="en">
<head>
    <title>Artificial Intelligence</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/path/to/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
      <style>
    body {
        background-color: #f9fafc;
        font-family: 'Segoe UI', sans-serif;
    }

    h1, h3 {
        font-weight: 700;
        color: #004080;
    }

    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
        border-radius: 15px;
        overflow: hidden;
        background-color: #ffffff;
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.08);
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 20px rgba(0, 0, 0, 0.12);
    }

    .card-img-top {
        height: 200px;
        object-fit: contain;
        background-color: #f1f1f1;
        padding: 10px;
    }

    .card-title {
        font-weight: 600;
        font-size: 1.1rem;
        color: #333;
    }

    .card-text {
        font-size: 0.95rem;
        color: #555;
    }

    .btn-primary {
        background-color: #004080;
        border-color: #004080;
        transition: all 0.2s ease-in-out;
    }

    .btn-primary:hover {
        background-color: #002f5e;
        border-color: #002f5e;
    }

    footer {
        box-shadow: 0 -3px 8px rgba(0, 0, 0, 0.1);
    }

    .swiper-button-next,
    .swiper-button-prev {
        color: #004080;
        font-size: 20px;
        font-weight: bold;
    }

    @media (max-width: 576px) {
        h1, h3 {
            font-size: 1.25rem;
        }

        .card-title {
            font-size: 1rem;
        }

        .card-text {
            font-size: 0.875rem;
        }

        .card {
            margin-bottom: 1rem;
        }
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
<br>
<main>
    <div class="container my-5">
    <h1 class="text-center">Artificial Intelligence</h1><br>

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="card" style="width: 20rem;">
                    <img src="/images/AI-ai.jpeg" class="card-img-top" alt="Langkah 1">
                    <div class="card-body">
                        <h6 class="card-title">Materi 1</h6>
                        <p class="card-text">Pendahuluan AI</p>
                        <a href="/matakuliah/software-html" class="btn btn-sm btn-primary mt-2">Pelajari</a>
                    </div>
                </div>
            </div>

             <div class="swiper-slide">
                <div class="card" style="width: 20rem;">
                    <img src="/images/AI2.jpeg" class="card-img-top" alt="Langkah 2">
                    <div class="card-body">
                        <h6 class="card-title">Materi 2</h6>
                        <p class="card-text">Search dan Problem Solving</p>
                        <a href="#" class="btn btn-sm btn-primary mt-2">Pelajari</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card" style="width: 20rem;">
                    <img src="/images/AI3.jpeg" class="card-img-top" alt="Langkah 3">
                    <div class="card-body">
                        <h6 class="card-title">Materi 3</h6>
                        <p class="card-text">Knowledge Representation</p>
                        <a href="#" class="btn btn-sm btn-primary mt-2">Pelajari</a>
                    </div>
                </div>
            </div>

             <div class="swiper-slide">
                <div class="card" style="width: 20rem;">
                    <img src="/images/AI4.jpeg" class="card-img-top" alt="Langkah 4">
                    <div class="card-body">
                        <h6 class="card-title">Materi 4</h6>
                        <p class="card-text">Machine Learning (ML)</p>
                        <a href="#" class="btn btn-sm btn-primary mt-2">Pelajari</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card" style="width: 20rem;">
                    <img src="/images/AI5.jpeg" class="card-img-top" alt="Langkah 4">
                    <div class="card-body">
                        <h6 class="card-title">Materi 5</h6>
                        <p class="card-text">Natural Language Processing (NLP)</p>
                        <a href="#" class="btn btn-sm btn-primary mt-2">Pelajari</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card" style="width: 20rem;">
                    <img src="/images/AI6.jpeg" class="card-img-top" alt="Langkah 4">
                    <div class="card-body">
                        <h6 class="card-title">Materi 6</h6>
                        <p class="card-text">Computer Vision (Pengenalan Visual)</p>
                        <a href="#" class="btn btn-sm btn-primary mt-2">Pelajari</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card" style="width: 20rem;">
                    <img src="/images/AI7.jpeg" class="card-img-top" alt="Langkah 4">
                    <div class="card-body">
                        <h6 class="card-title">Materi 7</h6>
                        <p class="card-text">Expert Systems</p>
                        <a href="#" class="btn btn-sm btn-primary mt-2">Pelajari</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card" style="width: 20rem;">
                    <img src="/images/AI8.jpeg" class="card-img-top" alt="Langkah 4">
                    <div class="card-body">
                        <h6 class="card-title">Materi 8</h6>
                        <p class="card-text">AI di Robotics</p>
                        <a href="#" class="btn btn-sm btn-primary mt-2">Pelajari</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card" style="width: 20rem;">
                    <img src="/images/AI9.jpeg" class="card-img-top" alt="Langkah 4">
                    <div class="card-body">
                        <h6 class="card-title">Materi 9</h6>
                        <p class="card-text">Etika dan Isu Sosial dalam AI</p>
                        <a href="#" class="btn btn-sm btn-primary mt-2">Pelajari</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="d-flex justify-content-center gap-3 mt-3">
  <button class="btn btn-primary swiper-prev">←</button>
  <button class="btn btn-primary swiper-next">→</button>
</div>

         
</div>
    </div>
</div>
</main>
<!-- Footer -->
<footer class="text-white text-center py-4" style="background-color: #004080;">
    <p class="mb-0">© {{ date('Y') }} SISCourse — Sistem Informasi Pembelajaran STT Nurul Fikri</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
  slidesPerView: 3,
  spaceBetween: 20,
  navigation: {
    nextEl: ".swiper-next",
    prevEl: ".swiper-prev",
  },
  breakpoints: {
    768: { slidesPerView: 3 },
    576: { slidesPerView: 2 },
    0:   { slidesPerView: 1 }
  }
});
 var swiper1 = new Swiper(".mySwiper1", {
  slidesPerView: 3,
  spaceBetween: 20,
  navigation: {
    nextEl: ".swiper-next1",
    prevEl: ".swiper-prev2",
  },
  breakpoints: {
    768: { slidesPerView: 3 },
    576: { slidesPerView: 2 },
    0:   { slidesPerView: 1 }
  }
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>