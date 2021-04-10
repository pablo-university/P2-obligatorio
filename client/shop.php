<?php include_once __DIR__ . '/../components/template/index.php'; ?>
<?php include_once __DIR__ . '/components/product_card.php'; ?>



<?php function content()
{ ?>
    <div class='container-client'>
        <?php include_once __DIR__ . '/components/header.php'; ?>
        <div class='container py-5 bg-light'>
            <p>aqui irian las migas de pan</p>
            <!-- titulo y select de ordenación -->
            <div class="d-flex justify-content-between pb-4 pe-5">
                <h1>Shop</h1>
                <select class="form-select w-auto" aria-label="Default select example">
                    <option value="1" selected>Menor precio</option>
                    <option value="2">Mayor precio</option>
                    <option value="3">Three</option>
                </select>
            </div>



            <div class="row gx-5">
                <!-- aside de filtrado -->
                <?php include_once __DIR__ . '/components/shop_aside.php'; ?>

                <!-- productos -->
                <main class="col-12 col-lg-8">
                    <!-- ------------ -->
                    <div class='row row-cols-xxl-4 row-cols-md-2  pb-5'>
                        <?php
                        for ($n = 0; $n < 2; $n++) {
                            for ($i = 1; $i < 3; $i++) {
                                card_product([
                                    '_id' => '234234234',
                                    'img' => "watch-$i.jpg",
                                    'title' => 'Otro reloj',
                                    'price' => 350,
                                    'sale' => false
                                ]);
                            }
                        }
                        ?>
                    </div>

                    <!-- pagination -->
<!--                     <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav> -->

                </main>
            </div>






        </div>
        <!-- cierre contenedor de productos -->

        <?php include_once __DIR__ . '/components/footer.php'; ?>
    </div>
    <!-- cierre container client -->


<?php } ?>
<!-- cierre layout -->


<?php layout("content") ?>