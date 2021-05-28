<header class="navbar navbar-expand-md navbar-dark bg-dark | shadow position-sticky top-0 z-index-1">
  <div class="container-fluid">

    <!-- boton -->
    <button class="navbar-toggler | hamburger hamburger--slider" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>


    <!-- marca -->
    <a class="navbar-brand | col-md-3 col-lg-2 me-0 px-3" href="#">WatchClock</a>

    <!-- contenedor con navbar a collapsar -->
    <div class="collapse navbar-collapse | justify-content-between" id="sidebarMenu">

      <!-- navbar -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-nowrap" aria-current="page" href="./../client/index.php">
            <i class="bi bi-eye-fill"></i>
            Ver sitio
          </a>
        </li>
        <li class="nav-item">
          <p class="nav-link m-0 text-light text-nowrap">
            <i class="bi bi-person-fill"></i>
            <?= 'Bienvenido@: ' . $_SESSION['user_name'] ?>
          </p>
        </li>
        <li class="nav-item">
          <a class="nav-link text-nowrap" href="/images/myw3schoolsimage.jpg" download="w3logo">
          <i class="bi bi-save2-fill"></i>
          Backup db
          </a>
        </li>
      </ul>
      <!-- buscador -->
      <form class="" action="./list_update_delete.php">
        <input class="form-control form-control-dark" name="search" type="text" placeholder="Buscar productos" aria-label="Search">
      </form>

    </div>


  </div>
</header>