<?php

// OBTIENE Y CREA EL QUERY
function shop_aside_filter($card_product, $conn): void
{
    $query = [];
    $query_main = [];
    $sub_query = [];
    /*
    recorro el request, que contiene arrays asociativos de names
    y por cada name recorro para obtener valores (name = value)
    y dejarlos en un array */
    foreach ($_REQUEST as $name => $arr) {
        foreach ($arr as $value) {
            array_push($query, "$name = '$value'");
            // 1) agregar a sub query
            array_push($sub_query, "$name = '$value'");
        }
        // 2) impode con OR
        $sub_query = implode(" OR ", $sub_query);

        // 3) agrego eso al query principal + paréntesis curvos
        array_push($query_main, '('.$sub_query.')');

        // 4) vacio sub query
        $sub_query = [];
    }
    // por ultimo tomo el array query, uso implode y agrego el AND
    $query = implode(" OR ", $query);//trae/filtra lo que puede, no es estricto

var_dump(implode(" AND ", $query_main));

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
echo "$query";
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