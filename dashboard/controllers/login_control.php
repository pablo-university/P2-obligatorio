<?php
session_unset();
session_start();
include_once __DIR__ . '/../helpers/class_get_props.php';
include_once __DIR__ . '/../../connectors/connection.php';
include_once __DIR__.'/../helpers/traits.php';
// controlar si el usuario es correcto ingresarlo sino
// no ingresarlo y darle mensaje

// instancia de get_props
$get_props_instance = new Mi($conn);
// instancia de mi trait walker
$walker_instance = new class()
{
    use trait_walker;
};


// obtener datos de url
$user_name = $_REQUEST['user_name'];
$password = $_REQUEST['password'];

// consulta db
$res_query = $get_props_instance->get_prop('admin', '*', "WHERE (user_name='$user_name' AND password='$password')");
// $res_password = $get_props_instance->get_prop('admin', '*', "WHERE user_name=$password");

// extact data from query, if exist...
$res_query = empty($res_query) ? null : $res_query->fetch_object();

// -----------------------------

$msg = null;

if ($res_query) {
    // destruyo sessiones activas
    // session_unset();
    // inicio una sesión
    //session_start();
    $_SESSION['user_name'] = $user_name;
    // redirecciono
    $walker_instance->walker([
        'dir' => 'dashboard/index.php', 
        'msg' => null, 
        'code' => null, 
        'optional_query' => null
    ]);
} else {

    $msg .= $res_query ? '' : "credenciales incorrectas";

    $code = 404;
    $walker_instance->walker([
        'dir' => 'dashboard/login.php', 
        'msg' => $msg, 
        'code' => '404', 
        'optional_query' => null
    ]);
}
