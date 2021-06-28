<?php include_once __DIR__.'/../../connectors/connection.php';?>
<?php include_once __DIR__.'/product_card.php';?>

<!-- CONTENIDO DEL card_product -->
<section class='container py-5'>

    <h3>Linea en sale</h3>

    <div class="row row-cols-lg-4 justify-content-evenly my-5 gy-3">

        <?php
        // si hay id lo obtengo para evitar que el en sale sea igual al del id
        $id_exist = isset($_GET['_id']) ? $_GET['_id'] : false;
        $id_exist = $id_exist ? "AND (NOT (P._id = $id_exist))": '';

        // creo mi query
        $query = "
            SELECT P._id, I.url, P.title, P.price, P.sale
            FROM products P
            INNER JOIN images I
            ON P._id = I.id_product
            WHERE sale = '1' $id_exist
            GROUP BY (P._id)
            LIMIT 4;
            ";

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

        ?>
    </div>
</section>
<!-- fin de card_product -->