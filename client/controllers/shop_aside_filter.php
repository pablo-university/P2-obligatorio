<?php

// OBTIENE Y CREA EL QUERY
function shop_aside_filter($card_product, $conn): void
{
    $query = [];
    /*
    recorro el request, que contiene arrays asociativos de names
    y por cada name recorro para obtener valores (name = value)
    y dejarlos en un array */
    foreach ($_REQUEST as $name => $arr) {
        foreach ($arr as $value) {
            array_push($query, "$name = '$value'");
        }
    }
    // por ultimo tomo el array query, uso implode y agrego el AND
    $query = implode(" OR ", $query);//cambie and por or -> imposible color = negro AND color = gris


    // COMPLETO MI QUERY
    $query = "
    SELECT P._id, I.url, P.title, P.price, P.sale
    FROM products AS P
    INNER JOIN images AS I
    ON P._id = I.id_product
    WHERE $query
    GROUP BY (P._id)
    ;
    ";

    $res = mysqli_query($conn, $query);


    // si la consulta no es vacia la recorro
    if ($res->num_rows < 1) {
        echo "<p>no hay productos para mostrar...<p/>";
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
}



?>