<?php 
include_once __DIR__.'/../../connectors/connection.php';

function delete_products($_id) {
global $conn;

    $query = "
        DELETE
        FROM products
        WHERE products._id = $_id
        ";

        // aca piensa que $conn es null pero se lo paso en el constructor
        $res = $conn->query($query);

        if ($res->num_rows < 1) :
            return null;
        else :
            
            return $res;
        endif;
}

?>

<!-- eliminar producto y sus relaciones dentro de las tablas -->