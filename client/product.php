<?php include_once __DIR__ . '/../components/template/layout.php'; ?>
<?php include_once __DIR__ . '/../utils/constants.php'; ?>

<?php function product(): void
{ ?>
    <div class="container-client">
        <?php include_once __DIR__ . '/components/header.php'; ?>



        <main class="container min-vh-100 py-5">

            <!-- BREADCUMP -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
            </nav>


            <!-- SI ID EXISTE -->
            <?php if (!empty($_GET['_id'])) : ?>
                <div class="row row-cols-1 row-cols-xl-2">

                    <!-- columna foto -->
                    <div>
                        <?php include_once __DIR__ . '/components/product_slide.php'; ?>
                    </div>

                    <!-- columna ficha tecnica -->
                    <div>
                        <?php include_once __DIR__ . '/components/product_feature.php'; ?>
                    </div>
                </div>



            <!-- SI PRODUCTO NO EXISTE -->
            <?php else : ?>
                <h3>no se otorgó _id</h3>
            <?php endif; ?>


        </main>


        <?php include_once __DIR__ . '/components/footer.php'; ?>
    </div>
<?php } ?>

<?php layout("product") ?>