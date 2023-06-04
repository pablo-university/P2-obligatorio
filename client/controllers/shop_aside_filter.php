<?php

/* 
---- RESUMEN -----
este filtro: traeme conincidencia con una propiedad con un valor OR varios valores...
AND se exaustivo en que si seleccionas mas de una propiedad cumpla eso (tener mas de una propiedad en la query) */

// OBTIENE Y CREA EL QUERY
function shop_aside_filter($card_product, $conn): void
{
    $query = [];
    $clause_in = [];
    $in_values = [];
    /*
    0) recorro el request, que contiene arrays asociativos de names
    y por cada name recorro para obtener valores (name = value)
    e irlos procesando (marque con pasos) */
    foreach ($_REQUEST as $name => $arr) {
        // fix: recorrer solo si es array
        if (gettype($arr) == 'array'){
            foreach ($arr as $value) {
                // 1) agregar a in_values
                array_push($in_values, "'$value'");
            }
        }
       
        // 2) implode con ,
        $in_values = implode(",", $in_values);

        // 3) agrego nueva clausula IN
        array_push($clause_in, "$name IN ($in_values)");

        // 4) vacio in_values
        $in_values = [];
    }

    // 5) por ultimo uso implode y agrego el AND
    $query = implode(" AND ", $clause_in); //no es estricto en una porpiedad con valores, pero si cuando tiene varias!

    // COMPLETO MI QUERY
    $query = "
    SELECT P._id, I.url, P.title, P.price, P.sale
    FROM products P
    INNER JOIN images I
    ON P._id = I.id_product

    JOIN product_color PC
    ON P._id = PC.id_product

    WHERE $query
    GROUP BY (P._id)
    ;
    ";


    $res = mysqli_query($conn, $query);

    // si la consulta no es vacia la recorro
    // fix: se seteo !$res para prevenir mostrar sin consulta
    if (!$res or $res->num_rows < 1) {
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
