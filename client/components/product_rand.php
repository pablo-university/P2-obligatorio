<?php
include_once __DIR__ . '/../../connectors/connection.php';
include_once __DIR__ . '/product_card.php';

$SELECT_FROM = "
SELECT P._id, I.url, P.title, P.price, P.sale
FROM products P
";
$JOIN_IMAGES = "
INNER JOIN images I
ON P._id = I.id_product
";
$WHERE = isset($_REQUEST['_id']) ? "WHERE P._id != $_REQUEST[_id]" : '';

$query = "
$SELECT_FROM
$JOIN_IMAGES
$WHERE
ORDER BY RAND()
LIMIT 4 
";

$res = $conn->query($query);

?>

<section class='container py-5'>
    <h3>Otros productos</h3>

    <div class="row row-cols-lg-4 justify-content-evenly my-5 gy-3">
    <?php
    // si la consulta no es vacia la recorro
    if ($res->num_rows < 1) {
        echo "no hay productos para mostrar...";
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
    ?>
    </div>
</section>