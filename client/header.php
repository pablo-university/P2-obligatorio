<!-- contenedor del menu-->
<div class='sticky-top bg-dark'>

    <nav class="navbar sticky-top navbar-expand-lg navbar-dark container py-xl-5">
        <div class="container-fluid px-0">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <svg id="burguer-menu" class="" viewBox="0 0 100 80" width="40" height="40">
                    <rect width="100" height="15" rx="5"></rect>
                    <rect y="30" width="100" height="15" rx="5"></rect>
                    <rect y="60" width="100" height="15" rx="5"></rect>
                </svg>
                <!-- /// -->
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">LOGO</a>
                <ul class="navbar-nav m-auto mb-2 mb-lg-0 gap-lg-5">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">inicio</a>
                    </li>

                    <!-- probando menu dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Categorías
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">uno</a></li>
                            <li><a class="dropdown-item" href="#">dos</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">tres</a></li>
                        </ul>
                    </li>
                    <!-- ------------------------- -->



                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">contacto</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">buscar</button>
                </form>
            </div>
        </div>
    </nav>
</div>

<!-- contenedor de reloj moderno y foto -->
<div class='container-fluid min-vh-100 px-0'>
    <!-- reloj moderno -->
    <div class='bg-dark'>
        <div class='container' style='height: 3.7rem;'>
            <h1 class='text-white text-end m-0 display-3' style='margin-bottom-' ;>A MODERN CLOCK</h1>
        </div>
    </div>
    <!-- foto y texto -->
    <div class='container'>
        <div class='row row-cols-xl-2'>
            <!-- carrusel -->
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../assets/img/carrusel-1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/img/carrusel-2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/img/carrusel-3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
            <!-- texto con boton -->
            <div class='flex-row m-auto'>
                <div class=''>
                    <h2 class=''>A MODERN CLOCK</h2>
                    <p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum.</p>
                    <button type="button" class='btn btn-outline-dark'>SABER MAS</button>
                </div>
            </div>
        </div>
    </div>