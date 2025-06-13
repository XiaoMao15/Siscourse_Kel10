<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FitLife</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="row">
    <div class="col-md-12">
      <?php include_once 'navbar.php'; ?>
    </div>
    <main class="flex-grow-1">
      <div class="container-lg px-5 py-5 mx-auto">
        <?php
        // Tangkap parameter 'page' dari URL
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        $allowed_pages = ['home', 'bmi', 'features', 'contact', 'cardio', 'st', 'hf', 'about'];
        if (in_array($page, $allowed_pages)) {
          include_once "pages/{$page}.php";
        } else {
          echo "<h1>404 Not Found</h1><p>Halaman tidak ditemukan.</p>";
        }
        ?>
      </div>
    </main>

    <div class="col-md-12">
      <?php include_once 'footer.php'; ?>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>