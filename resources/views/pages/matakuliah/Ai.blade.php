<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Materi Slide Horizontal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .materi-container {
      display: flex;
      overflow-x: auto;
      gap: 1rem;
      scroll-behavior: smooth;
      padding: 1rem 0;
    }

    .materi-card {
      flex: 0 0 auto;
      width: 300px;
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 1rem;
      background-color: white;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    .slider-wrapper {
      position: relative;
    }

    .slider-button {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: #fff;
      border: none;
      font-size: 2rem;
      padding: 0 10px;
      cursor: pointer;
      z-index: 1;
    }

    .slider-button.left {
      left: -10px;
    }

    .slider-button.right {
      right: -10px;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <h3>Materi Interaktif</h3>
    <div class="slider-wrapper">
      <button class="slider-button left" onclick="scrollLeft()">&#8592;</button>
      <div id="materiSlider" class="materi-container">
        <div class="materi-card">
          <h5>Langkah 1</h5>
          <p>Pengenalan Software Development.</p>
        </div>
        <div class="materi-card">
          <h5>Langkah 2</h5>
          <p>Belajar Bahasa Pemrograman Dasar.</p>
        </div>
        <div class="materi-card">
          <h5>Langkah 3</h5>
          <p>Mengenal Frontend dan Backend.</p>
        </div>
        <div class="materi-card">
          <h5>Langkah 4</h5>
          <p>Manajemen Proyek Perangkat Lunak.</p>
        </div>
         <div class="materi-card">
          <h5>Langkah 4</h5>
          <p>Manajemen Proyek Perangkat Lunak.</p>
        </div>
      </div>
      <button class="slider-button right" onclick="scrollRight()">&#8594;</button>
    </div>
  </div>

  <script>
    const slider = document.getElementById('materiSlider');

    function scrollLeft() {
      slider.scrollBy({ left: -300, behavior: 'smooth' });
    }

    function scrollRight() {
      slider.scrollBy({ left: 300, behavior: 'smooth' });
    }
  </script>
</body>
</html>
