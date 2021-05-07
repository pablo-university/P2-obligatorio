<?php include_once __DIR__ . '/../../connectors/connection.php'; ?>
<?php include_once __DIR__ . '/../../utils/constants.php'; ?>
<?php include_once __DIR__ . '/product_card.php'; ?>

<!-- contenedor de reloj moderno y foto -->
<section class='container-fluid px-0'>
    <!-- reloj moderno -->
    <div class='bg-dark'>
        <div class='container' style='height: 3.7rem;'>
            <h1 class='text-white text-end m-0 display-3'>A MODERN CLOCK</h1>
        </div>
    </div>
    <!-- foto y texto -->
    <div class='container-fluid ps-xl-0'>
        <div class='row row-cols-xl-2'>
            <!-- carrusel -->
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../assets/img/client-carrusel-1.jpg" class="d-block w-100" alt="..." alt="..." style='object-fit: cover; max-height:90vh;'>
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/img/client-carrusel-2.jpg" class="d-block w-100" alt="..." alt="..." style='object-fit: cover; max-height:90vh;'>
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/img/client-carrusel-3.jpg" class="d-block w-100" alt="..." alt="..." style='object-fit: cover; max-height:90vh;'>
                    </div>
                </div>
            </div>
            <!-- texto con boton -->
            <div class='flex-row m-auto'>
                <div class='w-75 py-4'>
                    <figure>
                        <blockquote class="blockquote">
                            <h2>El tiempo es un amigo</h2>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            creemos que con nuestros productos debes sentirte confiado
                        </figcaption>
                    </figure>
                    <p> Desde 1976, más de 500 millones de relojes han sido comprados y amados por personas en más de 120 países. Esta marca significa "Calidad y cantidad". Lo que significa que combinamos estos rasgos mediante la producción de relojes confiables y de calidad utilizando la artesanía japonesa en Cantidades para personas de todo el mundo.
                    </p>
                    <a href="./shop.php" class='btn btn-outline-dark'>IR AL SHOP</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nuestra filosofia -->
<section class="bg-dark text-white">
    <div class='container py-5 text-center'>
        <div class='p-5'></div>
        <h3>Nuestra filosofía</h3>
        <p class='col-xl-6 m-auto'>Nuestra misión es enriquecer la vida cotidiana de las personas en el mundo al exponerles una marca de relojes japonesa confiable y de calidad.
            Hacemos esto ofreciendo nuestras colecciones asequibles disponibles para todos, en todas partes.</p>
        <div class='p-5'></div>
    </div>
</section>

<!-- video -->
<section class='container-fluid p-0'>
    <video loop autoplay class='w-100'>
        <source src="<?php echo LOCAL_HOST; ?>assets/img/show.mp4" type="video/webm">
    </video>
</section>

<!-- PRODUCTS IN SALE -->
<?php include_once __DIR__ . '/product_in_sale.php'; ?>

<!-- propiedades -->
<section class='container py-5'>
    <div class='p-5'></div>
    <h3>Características</h3>
    <!-- propiedades cards -->
    <div class="card-group flex-column flex-lg-row gap-4 py-5">
        <div class="card">
            <img src="<?php echo LOCAL_HOST; ?>assets/img/client-card-1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Incondicional</h5>
                <p class="card-text">Dónde y cuando lo necesite con vos, es tu compañero de viajes hasta quizá para dormir, tenemos modelos resistentes al gua, puedes ver las diferentes variedades!</p>
            </div>
            <div class="card-footer">
                <small class="text-muted"></small>
            </div>
        </div>
        <div class="card">
            <img src="<?php echo LOCAL_HOST; ?>assets/img/client-card-2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Resistencia</h5>
                <p class="card-text">Tu reloj debe acompañarte cada día cada momento es por eso que necesita ser resistente, golpes roces o cualquier toque debe soportarlo, puedes ver nuestros diferentes modelos!</p>
            </div>
            <div class="card-footer">
                <small class="text-muted"></small>
            </div>
        </div>
        <div class="card">
            <img src="<?php echo LOCAL_HOST; ?>assets/img/client-card-3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Elegante</h5>
                <p class="card-text">No es un simple amuleto en tu muñeca y ya, debes sentirte cómodo que vaya con vos, acorde a lo que sientas, debe ser armónico y es por eso que nos encargamos de encontrar tu modelo.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted"></small>
            </div>
        </div>
    </div>
    <!-- ------- -->
    <div class='p-5'></div>
</section>



<!-- PRODUCTOS RANDOMICOS -->
<?php include_once __DIR__ . '/product_rand.php'; ?>