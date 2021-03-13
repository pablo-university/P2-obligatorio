<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light container col-xxl-10">
    <div class="container-fluid">
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