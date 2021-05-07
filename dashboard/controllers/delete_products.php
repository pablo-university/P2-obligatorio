<p>
    <?php
    include_once __DIR__ . '/../../connectors/connection.php';


    if (!empty($_REQUEST['delete'])) {
        $id = 324;
        /* 
        para cda id deberé recorrerlos y borrar con las
        siguientes querys */

        foreach ($_REQUEST['delete'] as $key => $id) {
            echo "la id a borrar es: $id <br>";

            $query_products = "
            DELETE
            FROM products
            WHERE products._id = $id
            ";

          /*   $query_product_band = "
            DELETE
            FROM product_band
            WHERE product_band.id_product = $id
            "; */

            $query_images = "
            DELETE
            FROM images
            WHERE images.id_product = $id
            ";

            // $conn->query($query_product_band);
            $conn->query($query_images);                                    
            $conn->query($query_products);
        }

        echo ">>se borraron los datos";   
    }



    ?>
</p>

<!-- eliminar producto y sus relaciones dentro de las tablas -->