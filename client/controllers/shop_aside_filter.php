<?php

/* 
---- RESUMEN -----
este filtro: traeme conincidencia con una propiedad con un valor OR varios valores...
AND se exaustivo en que si seleccionas mas de una propiedad cumpla eso (tener mas de una propiedad en la query) */

// OBTIENE Y CREA EL QUERY
function shop_aside_filter($card_product, $conn): void
{
    $query = [];
    $sub_query = [];
    /*
    0) recorro el request, que contiene arrays asociativos de names
    y por cada name recorro para obtener valores (name = value)
    e irlos procesando (marque con pasos) */
    foreach ($_REQUEST as $name => $arr) {
        foreach ($arr as $value) {
            // 1) agregar a sub query
            array_push($sub_query, "$name = '$value'");
        }
        // 2) implode con OR
        $sub_query = implode(" OR ", $sub_query);

        // 3) agrego eso al query principal + paréntesis curvos
        array_push($query, '(' . $sub_query . ')');

        // 4) vacio sub query
        $sub_query = [];
    }
    // 5) por ultimo tomo el array query, uso implode y agrego el AND
    $query = implode(" AND ", $query); //no es estricto en una porpiedad con valores, pero si cuando tiene varias!

    
    // COMPLETO MI QUERY
    $query = "
    SELECT P._id, I.url, P.title, P.price, P.sale
    FROM products P
    INNER JOIN images I
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
