<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">

  <!-- boton oculta barra nav -->

  <button class="hamburger hamburger--slider | navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
  </button>

  <!-- logo -->
  <a class="navbar-brand col-md-3 col-lg-3 me-0 px-3" href="#">WatchClock</a>

  <form class="w-100" action="./list_update_delete.php">
    <input class="form-control form-control-dark w-100" name="search" type="text" placeholder="Buscar productos" aria-label="Search">
  </form>

  <!-- le asigne mismo id que navbar osea que cuando el boton de menu sea presionado tendra dos data-bs-target -->
  <ul class="navbar-nav px-3 collapse d-md-block" id="sidebarMenu">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="./login.php">Salir</a>
    </li>
  </ul>
</header>