<?php include_once __DIR__ . '/../components/template/layout.php'; ?>
<?php include_once __DIR__.'/../utils/constants.php';?>

<?php function product(): void
{ ?>
    <div class="container-client">
        <?php include_once __DIR__ . '/components/header.php'; ?>



        <main class="container min-vh-100 py-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
            </nav>

            <!-- si producto existe -->
            <?php if (!empty($_GET['_id'])) : ?>
                <div class="row row-cols-1 row-cols-xl-2 bg-success">
                    <!-- columna foto -->
                    <div>
                        
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo LOCAL_HOST."/assets/img/products/watch-1.jpg";?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo LOCAL_HOST."/assets/img/products/watch-2.jpg";?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo LOCAL_HOST."/assets/img/products/watch-3.jpg";?>" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                    </div>
                    <!-- columna ficha tecnica -->
                    <div>
                        <p class="bg-warning">hola</p>
                    </div>
                </div>


                <!-- si producto no existe -->
            <?php else : ?>
                <h3>producto no existe</h3>
            <?php endif; ?>


        </main>


        <?php include_once __DIR__ . '/components/footer.php'; ?>
    </div>
<?php } ?>

<?php layout("product") ?>