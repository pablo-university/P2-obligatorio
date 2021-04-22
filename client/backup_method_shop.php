<?php if (empty($_REQUEST)) {

$query = "
SELECT P._id, I.url, P.title, P.price, P.sale
FROM products AS P, images AS I
WHERE P._id = I.id_product
GROUP BY P._id
;
";

// hago una consulta
$res = mysqli_query($conn, $query);

// si la consulta no es vacia la recorro
if ($res->num_rows < 1) {
    echo "no hay productos para mostrar...";
} else {
    while ($data = mysqli_fetch_object($res)) {
        echo '<pre>' . var_export($data, true) . '</pre>';
        card_product([
            '_id' => $data->_id,
            'img' => $data->url,
            'title' => $data->title,
            'price' => $data->price,
            'sale' => $data->sale
        ]);
    }
}
// ORDENAR ASC O DESC
} elseif (!empty($_REQUEST['order_by'])) {
echo "intentaste acceder a orderBy";
// ORDENAR POR FILTROS
} else {
echo '<pre>' . var_export($_REQUEST, true) . '</pre>';
echo "<hr><br>";

shop_aside_filter("card_product", $conn);
}
?>