<?php include_once __DIR__ . './../../utils/constants.php'; ?>
<?php include_once __DIR__.'/theme_logic.php';?>

<header class="navbar navbar-expand-md navbar-dark bg-primary | shadow position-sticky top-0 z-index-1">
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
          <i class="bi bi-eye"></i>
            Ver sitio
          </a>
        </li>
        <li class="nav-item">
          <p class="nav-link m-0 text-light text-nowrap">
          <i class="bi bi-person"></i>
            <?= 'Bienvenido@: ' . $_SESSION['user_name'] ?>
          </p>
        </li>
        <li class="nav-item">
          <a class="nav-link text-nowrap" href="<?= LOCAL_HOST . '_db/watch_shop.sql' ?>" download="db_backup.sql">
          <i class="bi bi-box-seam"></i>
            Backup db
          </a>
        </li>
        <li class="nav-item">
          <?php
          // this function get the next theme for change
          
          ?>


          <a class="nav-link text-nowrap" href="./<?=  basename($_SERVER['PHP_SELF']) . change_theme() ?>">
            <?php
            
            print_current_icon();
            ?>
            Switch theme
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