<?php
session_start();
include_once __DIR__ . '/../helpers/traits.php';

$walker_instance = new class()
{
    use trait_walker;
};

if (!isset($_SESSION['user_name'])) {
    $walker_instance->walker([
        'dir' => 'dashboard/login.php', 
        'msg' => 'no estás logueado', 
        'code' => '404', 
        'optional_query' => null
    ]);
}


if (!isset($_SESSION['user_time'])) {
    $_SESSION['user_time'] = time();
} else {
    // si estas mas de 30min sin hacer nada te saca
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
