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

        <!-- el overflow es para contener los paddings y margen de bootstrap -->
        <div class='container shop py-5 overflow-hidden'>

            <?php include_once __DIR__ . '/components/breadcrumb.php'; ?>

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
                <main class="col-12 col-md-9 col-lg-10 overflow-autox">

                    <!-- caja de products -->
                    <div class='row row-cols-xl-4 row-cols-md-2 gy-3 pb-5'>

                        <!-- TRAE PRODUCTOS NEW -->
                        <?php
                        // traer la isntancia
                        include_once __DIR__ . '/../dashboard/controllers/get_props.php';

                        // chequear que NO estoy filtrando
                        $not_is_filter = (isset($_REQUEST['current_page']) or empty($_REQUEST) or isset($_REQUEST['search']) or isset($_REQUEST['order_asc']) or isset($_REQUEST['order_desc']));

                        // -----------------------
                        // echo "$query";
                        // query con datos, consulta normal
                        if ($not_is_filter) : //!empty($query)

                            $current_page = isset($_REQUEST['current_page']) ? $_REQUEST['current_page'] : 0;
                            // defino artiulos por pagina
                            $amount = 8;
                            // obtengo respuesta
                            $res = $get_props_instance->get_all_products($current_page, $amount);

                            // si la consulta no es vacia la recorro
                            if (!$res or $res->num_rows < 1) {
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
                            // esta función ahora es un controller
                            shop_aside_filter("card_product", $conn);
                        endif;

                        ?>




                    </div>

                    <?php include_once __DIR__.'/../components/pagination.php';?>
                    <?php $pagination('./shop.php');?>

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