<?php
include_once __DIR__ . '/../../connectors/connection.php';
include_once __DIR__ . '/../../utils/constants.php';
include_once __DIR__.'/../helpers/class_add_new_product.php';



$prueba = new Add_new_product($conn);


$prueba->set_product();
// $prueba->upload_image();

// sanitizar con
// html_entity_decode("")



