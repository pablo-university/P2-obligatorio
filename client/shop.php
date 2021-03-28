<?php include_once __DIR__ . '/../components/template/index.php'; ?>
<?php include_once __DIR__ . '/components/card_product.php'; ?>



<?php function content()
{ ?>
    <div class='container-client'>
        <?php include_once __DIR__ . '/components/header.php'; ?>
        <div class='container py-5 bg-secondary'>
            <p>aqui irian las migas de pan</p>


            <div class="row gx-5">
                <!-- aside de filtrado -->
                <?php include_once __DIR__ . '/components/shop_aside.php'; ?>

                <!-- productos -->
                <main class="col-12 col-lg-8">
                    <div class='row row-cols-xxl-4 row-cols-md-2 gy-5 pb-5'>
                        <?php
                        for ($i = 1; $i < 5; $i++) {
                            card_product([
                                'img' => "assets/img/products/watch-$i.jpg",
                                'title' => 'Otro reloj',
                                'price' => 350,
                                'sale' => false
                            ]);
                        }
                        ?>
                    </div>
                    <!-- ------------ -->
                    <div class='row row-cols-xxl-4 row-cols-md-2 gy-5 pb-5'>
                        <?php
                        for ($i = 1; $i < 5; $i++) {
                            card_product([
                                'img' => "assets/img/products/watch-$i.jpg",
                                'title' => 'Otro reloj',
                                'price' => 350,
                                'sale' => false
                            ]);
                        }
                        ?>
                    </div>


                </main>
            </div>






        </div>
        <?php include_once __DIR__ . '/components/footer.php'; ?>
    </div>
<?php } ?>
<?php layout("content") ?>