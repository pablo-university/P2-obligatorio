<?php include_once __DIR__ . '/../components/template/index.php'; ?>
<?php include_once __DIR__ . '/components/product_card.php'; ?>
<?php include_once __DIR__ . '/controllers/shop_aside_filter.php'; ?>


<?php function content()
{ ?>
    <div class='container-client'>

        <!-- HEADER -->
        <?php include_once __DIR__ . '/components/header.php'; ?>

        <!-- CONECTION ACA PARA SHOP -->
        <?php include_once __DIR__ . '/../connectors/connection.php'; ?>

        <div class='container shop py-5'>

            <?php include_once __DIR__.'/components/breadcrumb.php';?>

            <!-- titulo y select de ordenación -->
            <div class="d-flex justify-content-between pb-4 pe-5">
                <h1>Shop</h1>
                <form action="./shop.php" method="get" id='order-by'>
                    <select class="form-select w-auto" aria-label="Default select example">
                        <option selected disabled>Ordenar</option>
                        <option value="desc">Mayor precio</option>
                        <option value="asc">Menor precio</option>
                    </select>
                </form>
                <script>
                    const select = document.querySelector('#order-by select');
                    select.onchange = function(e) {
                        console.log(select.value)
                        if (select.value == 'asc') {
                            window.location.href = './shop.php?order_asc'
                        } else {
                            window.location.href = './shop.php?order_desc'
                        }
                    }
                </script>
            </div>



            <div class="row gx-5">

                <!-- ASIDE FILTRADO -->
                <?php include_once __DIR__ . '/components/shop_aside.php'; ?>

                <!-- productos -->
                <main class="col-12 col-lg-8 overflow-autox">

                    <!-- caja de products -->
                    <div class='row row-cols-xxl-4 row-cols-md-2 gy-3 pb-5'>

                        <!-- TRAE PRODUCTOS NEW -->
                        <?php

                        // defino query
                        $query = null;

                        $SELECT_FROM = "
                        SELECT P._id, I.url, P.title, P.price, P.sale
                        FROM products AS P
                        ";
                        $JOIN_IMAGES = "
                        INNER JOIN images AS I
                        ON P._id = I.id_product
                        ";
                        // matcheo vacia? search? order_by? O SINO FILTRAR!
                        $query = match (true) { //matchea con el que de true
                            // cuando no se setea el request
                            empty($_REQUEST) => "
                                $SELECT_FROM
                                $JOIN_IMAGES
                                GROUP BY P._id
                                ;
                                ",
                            isset($_REQUEST['search']) => "
                                $SELECT_FROM
                                $JOIN_IMAGES
                                WHERE 
                                    P.title LIKE '%$_REQUEST[search]%' OR 
                                    P.description LIKE '%$_REQUEST[search]%' OR
                                    P.brand LIKE '%$_REQUEST[search]%' OR
                                    P.case LIKE '%$_REQUEST[search]%' OR
                                    P.display_type LIKE '%$_REQUEST[search]%' OR
                                    P.price LIKE '%$_REQUEST[search]%' OR
                                    P.stock LIKE '%$_REQUEST[search]%' OR
                                    P.user_type LIKE '%$_REQUEST[search]%'
                                GROUP BY P._id
                                ",
                            isset($_REQUEST['order_asc']) => "
                                $SELECT_FROM
                                $JOIN_IMAGES
                                GROUP BY P._id
                                ORDER BY P.price ASC
                                ",
                            isset($_REQUEST['order_desc']) => "
                                $SELECT_FROM
                                $JOIN_IMAGES
                                GROUP BY P._id
                                ORDER BY P.price DESC
                                ",
                            default => null
                        };
                        // echo "$query";
                        // query con datos, consulta normal
                        if (!empty($query)) :

                            // hago una consulta
                            $res = mysqli_query($conn, $query);

                            // si la consulta no es vacia la recorro
                            if ($res->num_rows < 1) {
                                echo "no hay productos para mostrar...";
                            } else {
                                while ($data = mysqli_fetch_object($res)) {
                                    // echo '<pre>' . var_export($data, true) . '</pre>';
                                    card_product([
                                        '_id' => $data->_id,
                                        'img' => $data->url,
                                        'title' => $data->title,
                                        'price' => $data->price,
                                        'sale' => $data->sale
                                    ]);
                                }
                            }

                        // sino filtrar
                        else :
                            /* echo '<pre>' . var_export($_REQUEST, true) . '</pre>';
                            echo "<hr><br>"; */
                            // esta función ahora es un controller
                            shop_aside_filter("card_product", $conn);
                        endif;

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