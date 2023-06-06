<?php
session_start();
include_once __DIR__ . '/../helpers/class_get_props.php';
include_once __DIR__ . '/../../connectors/connection.php';
include_once __DIR__.'/../helpers/traits.php';

$get_props_instance = new Mi($conn);
$walker_instance = new class()
{
    use trait_walker;
};

$user_name = $_REQUEST['user_name'];
$password = $_REQUEST['password'];

$res_query = $get_props_instance->get_prop('admin', '*', "WHERE (user_name='$user_name' AND password='$password')");
$res_query = empty($res_query) ? null : $res_query->fetch_object();

$msg = null;

if ($res_query) {
    $_SESSION['user_name'] = $user_name;
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
