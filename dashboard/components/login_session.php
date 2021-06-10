<?php
include_once __DIR__ . '/../../utils/constants.php';
include_once __DIR__ . '/../helpers/traits.php';

$HOST = LOCAL_HOST;
// inicio mi walker
$walker_instance = new class()
{
    use trait_walker;
};


// inicio una sesión
session_start();


// chequear si la sesion está en curso o no
if (!isset($_SESSION['user_name'])) {

    session_unset();

    $walker_instance->walker([
        'dir' => 'dashboard/login.php', 
        'msg' => 'no estás logueado', 
        'code' => '404', 
        'optional_query' => null
    ]);
}


// chequear si hay un tiempo marcado
if (!isset($_SESSION['user_time'])) {
    // tiempo en segundos unix (1 de Enero de 1970)
    $_SESSION['user_time'] = time();
} else {
    // si estas mas de 30min sin hacer nada te saca (1800sg)
    if ((time() - $_SESSION['user_time']) > 1800) {
        $walker_instance->walker([
            'dir' => 'dashboard/login.php', 
            'msg' => 'tiempo de sesión expirado', 
            'code' => '404', 
            'optional_query' => null
        ]);
    } else {
        $_SESSION['user_time'] = time();
    }
}
