<?php 
include_once __DIR__.'/../../connectors/connection.php';


/* esta funcion esta en desuso quiza pueda llegar a usarla para
traer colores, tener varios colores para un reloj y varios relojes
para un color */
$product_color = function ($_id) use ($conn){

    $query = "
    SELECT C.color, C.code FROM products P
    
    JOIN product_color PC
    ON P._id = PC.id_product
    
    JOIN color C
    ON PC.id_color = C._id
    
    WHERE P._id = $_id
    ";
    
    $res = $conn->query($query);

    if ($res->num_rows < 1) :
        return null;
    else :
        return $res;
    endif;
}

?>