<?php
// header('Content-Type: application/json');
include_once __DIR__ . '/class_chart_info.php';
include_once __DIR__.'/../../connectors/connection.php';


// Si request contiene algo creo una instancia
// sino retorno mensaje vacio
if (empty($_REQUEST)) {
    echo json_encode(['msg' => 'se debe asignar una propiedad target valida']);
    exit;
} else {
    
    // si la query existe instancio mi objeto para consultar
    $chart_info = new Chart_info($conn, $_REQUEST['target']);
}

/* 
NOTA: NO HACER COMENTARIOS YA QUE RETORNA LOS COMENTARIOS Y ROMPE TODO
una vez instanciado mi objeto de consulta me trae los datos
y los retorna como JSON, luego serán recuperados
por js para crear las gráficas por la biblioteca chartJS  */
?>
<?= $chart_info->chart_main(); ?>