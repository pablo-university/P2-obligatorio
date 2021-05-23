<?php
include_once __DIR__ . '/../../connectors/connection.php';
include_once __DIR__ . '/../../utils/constants.php';
include_once __DIR__.'/../helpers/class_add_new_product.php';


echo '<pre>' . var_export($_FILES['image'], true) . '</pre>';


$prueba = new Add_new_product($conn);


$prueba->set_product();
// sanitizar con
// html_entity_decode("")



