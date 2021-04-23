<?php 
include_once __DIR__.'/../../connectors/connection.php';

$get_band = function ($_id) use ($conn){

    $query = "
    SELECT B.band FROM products P
    
    JOIN product_band PB
    ON P._id = PB.id_product
    
    JOIN band B
    ON PB.id_band = B._id
    
    WHERE P._id = $_id
    ";
    
    $res = $conn->query($query);

    if ($res->num_rows < 1) :
        return 'sin asignar';
    else :
        $materials = [];
        while ($data = $res->fetch_object()) {
            array_push($materials, $data->band);
        }
        return implode(',', $materials);
    endif;
}

?>