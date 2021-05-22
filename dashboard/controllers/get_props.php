<?php

include_once __DIR__ . '/../../connectors/connection.php';
include_once __DIR__.'/../helpers/class_get_props.php';



// get_all_products
$get_all_products = new Mi($conn);

// Instancia para traer todas las propiedades
$class_get_props = new Mi($conn);

// instancia para contar valores de cantidad envio gratis en sale etc
$count_value_in_true = new Mi($conn);
