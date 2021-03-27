<?php include_once __DIR__ . '/../../utils/constants.php'; ?>

<!-- contenedor de reloj moderno y foto -->
<section class='container-fluid px-0'>
    <!-- reloj moderno -->
    <div class='bg-dark'>
        <div class='container' style='height: 3.7rem;'>
            <h1 class='text-white text-end m-0 display-3' style='margin-bottom-' ;>A MODERN CLOCK</h1>
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
                <div class='w-75'>
                    <figure>
                        <blockquote class="blockquote">
                            <h2>Juega tranquilo!</h2>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            somos personas de confianza, seguros
                        </figcaption>
                    </figure>
                    <p> Desde 1976, más de 500 millones de relojes han sido comprados y amados por personas en más de 120 países. Esta marca significa "Calidad y cantidad". Lo que significa que combinamos estos rasgos mediante la producción de relojes confiables y de calidad utilizando la artesanía japonesa en Cantidades para personas de todo el mundo.
                    </p>
                    <a href="./shop.php" class='btn btn-outline-dark'>GO TO SHOP</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nuestra filosofia -->
<section class='container bg-info py-5 text-center'>
    <div class='p-5'></div>
    <h3>Nuestra filosofía</h3>
    <p class='col-xl-6 m-auto'>Nuestra misión es enriquecer la vida cotidiana de las personas en el mundo al exponerles una marca de relojes japonesa confiable y de calidad.
        Hacemos esto ofreciendo nuestras colecciones asequibles disponibles para todos, en todas partes.</p>
    <div class='p-5'></div>
</section>

<!-- video -->
<section class='container-fluid bg-primary p-0'>
    <video loop autoplay class='w-100'>
        <source src="<?php echo LOCAL_HOST; ?>assets/img/show.webm" type="video/webm">
    </video>
</section>

<!-- propiedades -->
<section class='container bg-info py-5'>
    <div class='p-5'></div>
    <h3>Características</h3>
    <!-- propiedades cards -->
    <div class="card-group flex-column flex-lg-row gap-4 py-5">
        <div class="card">
            <img src="<?php echo LOCAL_HOST; ?>assets/img/client-card-1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted"></small>
            </div>
        </div>
        <div class="card">
            <img src="<?php echo LOCAL_HOST; ?>assets/img/client-card-2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted"></small>
            </div>
        </div>
        <div class="card">
            <img src="<?php echo LOCAL_HOST; ?>assets/img/client-card-3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted"></small>
            </div>
        </div>
    </div>
    <!-- ------- -->
    <div class='p-5'></div>
</section>


<!-- CONTENIDO DEL card_product -->
<section class='container py-5'>
    <h3>Linea en sale</h3>

    <div class="row row-cols-lg-4 justify-content-evenly my-5">
        <?php include_once __DIR__ . '/card_product.php'; ?>
        
        <?php 
        for ($i=1; $i < 5; $i++) { 
            card_product([
                'img' => "/assets/img/products/watch-$i.jpg",
                'title' => 'Otro reloj',
                'price' => 350,
                'sale' => false
            ]);
        }
        ?>
    </div>


</section>
<!-- fin de card_product -->