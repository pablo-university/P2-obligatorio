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
                <?php include_once __DIR__.'/components/shop_aside.php'; ?>

                <!-- productos -->
                <main class="col-8">
                    <?php card_product(null); ?>
                </main>
            </div>






        </div>
        <?php include_once __DIR__ . '/components/footer.php'; ?>
    </div>
<?php } ?>
<?php layout("content") ?>