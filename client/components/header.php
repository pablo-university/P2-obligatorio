<!-- contenedor del menu-->

<header class='sticky-top bg-dark'>

    <nav id='scroll-down-target' class="navbar sticky-top navbar-expand-lg navbar-dark container py-xl-5">
        <div class="container-fluid px-0">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <svg id="burguer-menu" class="" viewBox="0 0 100 80" width="40" height="40">
                    <rect width="100" height="15" rx="5"></rect>
                    <rect y="30" width="100" height="15" rx="5"></rect>
                    <rect y="60" width="100" height="15" rx="5"></rect>
                </svg>
                <!-- /// -->
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="./index.php">
                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 5.5V14L16 18" stroke="#F1F1F1" stroke-width="2" />
                        <mask id="path-2-inside-1" fill="white">
                            <path d="M23.9322 5.96526C22.7949 4.19797 21.2462 2.73273 19.4187 1.6951C17.5911 0.657462 15.5393 0.0783597 13.4389 0.00741045C11.3385 -0.0635388 9.25224 0.37578 7.35885 1.28773C5.46545 2.19967 3.82136 3.55705 2.56747 5.24357C1.31357 6.93009 0.487234 8.89545 0.159272 10.9713C-0.168689 13.0471 0.0114961 15.1715 0.684391 17.1624C1.35729 19.1534 2.50283 20.9515 4.02286 22.4027C5.5429 23.854 7.39211 24.915 9.41205 25.4951L9.85673 23.9465C8.08713 23.4383 6.4671 22.5088 5.13545 21.2374C3.8038 19.966 2.80023 18.3907 2.21073 16.6466C1.62123 14.9024 1.46338 13.0413 1.7507 11.2227C2.03801 9.40415 2.76193 7.68236 3.86043 6.20487C4.95892 4.72737 6.39925 3.53822 8.05799 2.73929C9.71672 1.94037 11.5444 1.5555 13.3845 1.61766C15.2246 1.67981 17.0221 2.18714 18.6232 3.09618C20.2242 4.00521 21.581 5.28885 22.5773 6.83711L23.9322 5.96526Z" />
                        </mask>
                        <path d="M23.9322 5.96526C22.7949 4.19797 21.2462 2.73273 19.4187 1.6951C17.5911 0.657462 15.5393 0.0783597 13.4389 0.00741045C11.3385 -0.0635388 9.25224 0.37578 7.35885 1.28773C5.46545 2.19967 3.82136 3.55705 2.56747 5.24357C1.31357 6.93009 0.487234 8.89545 0.159272 10.9713C-0.168689 13.0471 0.0114961 15.1715 0.684391 17.1624C1.35729 19.1534 2.50283 20.9515 4.02286 22.4027C5.5429 23.854 7.39211 24.915 9.41205 25.4951L9.85673 23.9465C8.08713 23.4383 6.4671 22.5088 5.13545 21.2374C3.8038 19.966 2.80023 18.3907 2.21073 16.6466C1.62123 14.9024 1.46338 13.0413 1.7507 11.2227C2.03801 9.40415 2.76193 7.68236 3.86043 6.20487C4.95892 4.72737 6.39925 3.53822 8.05799 2.73929C9.71672 1.94037 11.5444 1.5555 13.3845 1.61766C15.2246 1.67981 17.0221 2.18714 18.6232 3.09618C20.2242 4.00521 21.581 5.28885 22.5773 6.83711L23.9322 5.96526Z" stroke="#F1F1F1" stroke-width="4" mask="url(#path-2-inside-1)" />
                    </svg>
                </a>
                <ul class="navbar-nav m-auto mb-2 mb-lg-0 gap-lg-5">
                    <li class="nav-item">
                        <a class="nav-link 
                        <?php echo (str_contains(basename($_SERVER["REQUEST_URI"]), "index") ? 'active' : ''); ?>" aria-current="page" href="./index.php">
                            inicio
                        </a>
                    </li>

                    <!-- probando menu dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle 
                        <?php echo (str_contains(basename($_SERVER["REQUEST_URI"]), "cat") ? 'active' : ''); ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorías
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./shop.php">uno</a></li>
                            <li><a class="dropdown-item" href="./shop.php">dos</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="./shop.php">tres</a></li>
                        </ul>
                    </li>
                    <!-- ------------------------- -->



                    <li class="nav-item">
                        <a class="nav-link
                         <?php echo (str_contains(basename($_SERVER["REQUEST_URI"]), "conta") ? 'active' : ''); ?>" href="./contact.php" tabindex="-1" aria-disabled="true">
                            contacto
                        </a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-info" type="submit">buscar</button>
                </form>
            </div>
        </div>
    </nav>
</header>