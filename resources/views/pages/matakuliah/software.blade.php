<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pemrograman Web</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/path/to/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <style>
        .swiper-button-next, .swiper-button-prev {
            color: #333;
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
<br>
<main>
    <div class="container my-5">
    <h1 class="text-center">Pemrograman Web</h1>

    <!-- Langkah-langkah -->
    <h3 class="mt-4 mb-3">Front End</h3>
    
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="card" style="width: 20rem;">
                    <img src="/images/pemweb-html.png" class="card-img-top" alt="Langkah 1">
                    <div class="card-body">
                        <h6 class="card-title">Materi 1</h6>
                        <p class="card-text">Belajar HTML</p>
                        <a href="/matakuliah/software-html" class="btn btn-sm btn-primary mt-2">Pelajari</a>
                    </div>
                </div>
            </div>

             <div class="swiper-slide">
                <div class="card" style="width: 20rem;">
                    <img src="/images/pemweb-css.png" class="card-img-top" alt="Langkah 2">
                    <div class="card-body">
                        <h6 class="card-title">Materi 2</h6>
                        <p class="card-text">Belajar CSS</p>
                        <a href="#" class="btn btn-sm btn-primary mt-2">Pelajari</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card" style="width: 20rem;">
                    <img src="/images/pemweb-js.png" class="card-img-top" alt="Langkah 3">
                    <div class="card-body">
                        <h6 class="card-title">Materi 3</h6>
                        <p class="card-text">Belajar Java Script</p>
                        <a href="#" class="btn btn-sm btn-primary mt-2">Pelajari</a>
                    </div>
                </div>
            </div>

             <div class="swiper-slide">
                <div class="card" style="width: 20rem;">
                    <img src="/images/pemweb-bootstrap.jpeg" class="card-img-top" alt="Langkah 4">
                    <div class="card-body">
                        <h6 class="card-title">Materi 4</h6>
                        <p class="card-text">Belajar Framework Bootstrap</p>
                        <a href="#" class="btn btn-sm btn-primary mt-2">Pelajari</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center gap-3 mt-3">
  <button class="btn btn-primary swiper-prev">←</button>
  <button class="btn btn-primary swiper-next">→</button>
</div>

         <h3 class="mt-4 mb-3">Back End</h3>
    
    <div class="swiper mySwiper1">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="card" style="width: 20rem;">
                    <img src="/images/pemweb-node.png" class="card-img-top" alt="Langkah 1">
                    <div class="card-body">
                        <h6 class="card-title">Materi 1</h6>
                        <p class="card-text">Belajar JavaScript (Node.js)</p>
                        <a href="#" class="btn btn-sm btn-primary mt-2">Pelajari</a>
                    </div>
                </div>
            </div>

             <div class="swiper-slide">
                <div class="card" style="width: 20rem;">
                    <img src="/images/pemweb-python.jpeg" class="card-img-top" alt="Langkah 2">
                    <div class="card-body">
                        <h6 class="card-title">Materi 2</h6>
                        <p class="card-text">Belajar Python</p>
                        <a href="#" class="btn btn-sm btn-primary mt-2">Pelajari</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card" style="width: 20rem;">
                    <img src="/images/pemweb-php.jpeg" class="card-img-top" alt="Langkah 3">
                    <div class="card-body">
                        <h6 class="card-title">Materi 3</h6>
                        <p class="card-text">Belajar PHP</p>
                        <a href="#" class="btn btn-sm btn-primary mt-2">Pelajari</a>
                    </div>
                </div>
            </div>

             <div class="swiper-slide">
                <div class="card" style="width: 20rem;">
                    <img src="/images/pemweb-java.jpeg" class="card-img-top" alt="Langkah 4">
                    <div class="card-body">
                        <h6 class="card-title">Materi 4</h6>
                        <p class="card-text">Belajar Java</p>
                        <a href="#" class="btn btn-sm btn-primary mt-2">Pelajari</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card" style="width: 20rem;">
                    <img src="/images/pemweb-c.jpeg" class="card-img-top" alt="Langkah 4">
                    <div class="card-body">
                        <h6 class="card-title">Materi 5</h6>
                        <p class="card-text">Belajar C#</p>
                        <a href="#" class="btn btn-sm btn-primary mt-2">Pelajari</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="d-flex justify-content-center gap-3 mt-3">
  <button class="btn btn-primary swiper-prev2">←</button>
  <button class="btn btn-primary swiper-next1">→</button>
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