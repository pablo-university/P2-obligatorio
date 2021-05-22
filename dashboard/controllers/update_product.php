<?php
include_once __DIR__ . '/../../connectors/connection.php';
include_once __DIR__ . '/../../utils/constants.php';
include_once __DIR__.'/../helpers/class_update_product.php';


echo '<pre>' . var_export($_REQUEST, true) . '</pre>';

// instancio con la conexión y mi update_at
$update = new Update($conn, $_REQUEST['update_at']);



// ejecuto mi instancia
$update->update_product();