<?php include_once __DIR__.'/../../connectors/connection.php';?>
<?php include_once __DIR__.'/product_card.php';?>

<!-- CONTENIDO DEL card_product -->
<section class='container py-5'>

    <h3>Linea en sale</h3>

    <div class="row row-cols-lg-4 justify-content-evenly my-5">

        <?php
        // creo mi query
        $query = "
            SELECT P._id, I.url, P.title, P.price, P.sale
            FROM products P
            INNER JOIN images I
            ON P._id = I.id_product
            WHERE sale = '1'
            LIMIT 4;
            ";

        // hago una consulta
        $res = mysqli_query($conn, $query);

        // si la consulta no es vacia la recorro
        if (empty($res)) {
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