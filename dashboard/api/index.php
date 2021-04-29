<?php
include_once __DIR__ . '/class_chart_info.php';
include_once __DIR__.'/../../connectors/connection.php';

?>

<?php

// Si request contiene algo creo una instancia
// sino retorno mensaje vacio
if (empty($_REQUEST)) {
    echo json_encode(['msg' => 'empty']);
    exit;
} else {
    
    // si la query existe instancio mi objeto para consultar
    $chart_info = new Chart_info($conn, $_REQUEST['target']);
}


?>

<?= $chart_info->chart_main(); ?>