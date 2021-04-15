<?php include_once __DIR__ . '/../components/template/index.php'; ?>
<?php include_once __DIR__ . '/components/product_card.php'; ?>



<?php function content()
{ ?>
    <div class='container-client'>

        <!-- HEADER -->
        <?php include_once __DIR__ . '/components/header.php'; ?>

        <!-- CONECTION ACA PARA SHOP -->
        <?php include_once __DIR__ . '/../connectors/connection.php'; ?>

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
                
                <!-- ASIDE FILTRADO -->
                <?php include_once __DIR__ . '/components/shop_aside.php'; ?>

                <!-- productos -->
                <main class="col-12 col-lg-8 overflow-autox">

                    <!-- caja de products -->
                    <div class='row row-cols-xxl-4 row-cols-md-2 gy-3 pb-5'>

                        <!-- si no exisste request hago una petición basica -->
                        <?php if (empty($_REQUEST)) {

                            $query = "
                            SELECT *
                            FROM products
                            INNER JOIN images
                            ON products._id = images.id_product
                            LIMIT 4;
                            ";
                            // global $conn;
                            // hago una consulta
                            $res = mysqli_query($conn, $query);

                            // si la consulta no es vacia la recorro
                            if ($res->num_rows < 1) {
                                echo "no hay productos para mostrar...";
                            } else {
                                while ($data = mysqli_fetch_object($res)) {
                                    card_product([
                                        '_id' => $data->_id,
                                        'img' => $data->url,
                                        'title' => $data->title,
                                        'price' => $data->price,
                                        'sale' => $data->sale
                                    ]);
                                }
                            }
                        } else {
                            echo '<pre>' . var_export($_REQUEST, true) . '</pre>';
                            echo "<hr><br>";
                            
                            shop_aside_filter("card_product", $conn);
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