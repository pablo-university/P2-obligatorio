<?php include_once __DIR__ . '/../../connectors/connection.php';?>

<?php $get_all_products = function () use ($conn){
    $query = "
    SELECT *
    FROM products
    ";

    // aca piensa que $conn es null pero se lo paso en el constructor
    $res = $conn->query($query);

    if ($res->num_rows < 1) :
        return null;
    else :
        return $res;
    endif;
}?>