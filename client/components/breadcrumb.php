<?php include_once __DIR__ . '/../../connectors/connection.php'; ?>

<?php

$_id = !empty($_REQUEST['_id']) ? $_REQUEST['_id'] : 'vacio id';

$query = "
SELECT title, user_type FROM products
WHERE _id = $_id
";

$res = $conn->query($query);

if ($res) {
    $data = $res->fetch_object();
}



?>

<!-- si el id esta seteado -->

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./index.php">inicio</a></li>

        <?php if (!empty($_REQUEST['_id'])) { ?>
            <li class="breadcrumb-item">
                <a href="./shop.php?user_type[]=<?= $data->user_type ?>">
                <?= $data->user_type ?> 
                </a>
            </li>
            <li class="breadcrumb-item active"><?= $data->title ?> </li>
        <?php } else { ?>
            <li class="breadcrumb-item active" aria-current="page">
                <?php
                if (!empty($_REQUEST['user_type'])) {
                    echo $_REQUEST['user_type'][0];
                } else {
                    echo "shop";
                }
                ?>
            </li>
        <?php } ?>


    </ol>
</nav>