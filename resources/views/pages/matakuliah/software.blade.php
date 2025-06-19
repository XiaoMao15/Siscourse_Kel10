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

<div class="container my-5">
    <h1>Software Development</h1>

    <!-- Langkah-langkah -->
    <h3 class="mt-4 mb-3">Langkah-langkah Pembelajaran</h3>
    
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="card">
                    <img src="https://via.placeholder.com/300x180" class="card-img-top" alt="Langkah 1">
                    <div class="card-body">
                        <h6 class="card-title">Langkah 1</h6>
                        <p class="card-text">Belajar HTML & CSS</p>
                        ⭐ 4.8<br>
                        <span class="badge bg-success">Pemula</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card">
                    <img src="https://via.placeholder.com/300x180" class="card-img-top" alt="Langkah 2">
                    <div class="card-body">
                        <h6 class="card-title">Langkah 2</h6>
                        <p class="card-text">Belajar PHP Dasar</p>
                        ⭐ 4.7<br>
                        <span class="badge bg-primary">Pemula</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card">
                    <img src="https://via.placeholder.com/300x180" class="card-img-top" alt="Langkah 3">
                    <div class="card-body">
                        <h6 class="card-title">Langkah 3</h6>
                        <p class="card-text">Laravel Framework</p>
                        ⭐ 4.9<br>
                        <span class="badge bg-warning text-dark">Menengah</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card">
                    <img src="https://via.placeholder.com/300x180" class="card-img-top" alt="Langkah 3">
                    <div class="card-body">
                        <h6 class="card-title">Langkah 4</h6>
                        <p class="card-text">Laravel Framework</p>
                        ⭐ 4.9<br>
                        <span class="badge bg-warning text-dark">Menengah</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card">
                    <img src="https://via.placeholder.com/300x180" class="card-img-top" alt="Langkah 3">
                    <div class="card-body">
                        <h6 class="card-title">Langkah 5</h6>
                        <p class="card-text">Laravel Framework</p>
                        ⭐ 4.9<br>
                        <span class="badge bg-warning text-dark">Menengah</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card">
                    <img src="https://via.placeholder.com/300x180" class="card-img-top" alt="Langkah 3">
                    <div class="card-body">
                        <h6 class="card-title">Langkah 6</h6>
                        <p class="card-text">Laravel Framework</p>
                        ⭐ 4.9<br>
                        <span class="badge bg-warning text-dark">Menengah</span>
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

</script>

</body>
</html>