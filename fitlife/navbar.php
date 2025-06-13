<?php
$current_page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>

<nav class="navbar navbar-expand-lg bg-black border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand p-3 text-bold" href="#">
      <img src="img/logo.png" alt="Logo" width="55" height="24" class="d-inline-block align-text-top">
      FitLife
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php echo $current_page == 'home' ? 'active' : ''; ?>" href="index.php?page=home">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link <?php echo $current_page == 'about' ? 'active' : ''; ?>" href="index.php?page=about">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Features
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item <?php echo $current_page == 'features' ? 'active' : ''; ?>" href="index.php?page=cardio">Cardio</a></li>
            <li><a class="dropdown-item <?php echo $current_page == 'features' ? 'active' : ''; ?>" href="index.php?page=st">Strength Training</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item <?php echo $current_page == 'features' ? 'active' : ''; ?>" href="index.php?page=hf">Healthy Food</a></li>
          </ul>
        <li class="nav-item">
          <a class="nav-link <?php echo $current_page == 'bmi' ? 'active' : ''; ?>" href="index.php?page=bmi">BMI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $current_page == 'contact' ? 'active' : ''; ?>" href="index.php?page=contact">Contact</a>
        </li>
        </li>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

