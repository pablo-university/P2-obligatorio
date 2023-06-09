<?php
// ob_start();
include_once __DIR__ . '/../../connectors/connection.php';
include_once __DIR__.'/../../utils/constants.php';

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

        $query_delete_images = "
            SELECT *
            FROM images
            WHERE images.id_product = $id
            ";

        // borrar imagenes de directorio
        $images_for_delete = $conn->query($query_delete_images);
        while ($data = $images_for_delete->fetch_object()) {
            echo "Quisiera eliminar: " . __DIR__ . '/../../assets/img/products/' . $data->url . '<br>';
            unlink(__DIR__ . '/../../assets/img/products/' . $data->url);
        }

        $conn->query($query_product_color);
        $conn->query($query_images);
        $conn->query($query_products);
    }


    $res = 'elementos eliminados';
    header("Location: ./../list_update_delete.php?msg=$res");
} else{
    header("Location: ./../list_update_delete.php");
}
