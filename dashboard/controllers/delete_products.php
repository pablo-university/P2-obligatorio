<?php
// ob_start();
include_once __DIR__ . '/../../connectors/connection.php';

/** ELIMINO EL PRODUCTO Y LAS RELACIONES
 * queda pendiente volver a la pagina sin la query por si el user recarga
 * eliminar la imagen del local server
 * 
 *  **/
if (!empty($_REQUEST['delete'])) {
    $id = 324;
    /* 
        para cda id deberé recorrerlos y borrar con las
        siguientes querys */

    foreach ($_REQUEST['delete'] as $key => $id) {
        echo "la id a borrar es: $id <br>";

        // eliminar registro productos
        $query_products = "
            DELETE
            FROM products
            WHERE products._id = $id
            ";

        // eliminar registro product_color
        $query_product_color = "
            DELETE
            FROM product_color
            WHERE product_color.id_product = $id
            ";

        // eliminar registro images
        $query_images = "
            DELETE
            FROM images
            WHERE images.id_product = $id
            ";

        $conn->query($query_product_color);
        $conn->query($query_images);
        $conn->query($query_products);
    } ?>


    
    <script>
    location.replace("./list_update_delete.php?msg=se borraron los datos");
    </script>

<?php
// cierre if principal
} 
// ob_end_flush();
?>

<?php if (!empty($_REQUEST['msg'])) { ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $_REQUEST['msg'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php }?>

