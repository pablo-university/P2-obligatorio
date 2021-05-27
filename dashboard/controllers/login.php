<?php
include_once __DIR__ . '/../helpers/class_get_props.php';
include_once __DIR__ . '/../../connectors/connection.php';
// controlar si el usuario es correcto ingresarlo sino
// no ingresarlo y darle mensaje


$get_props_instance = new Mi($conn);


// obtener datos de url
$user_name = $_REQUEST['user_name'];
$password = $_REQUEST['password'];

// consulta db
$res_user_name = $get_props_instance->get_prop('admin', '*', "WHERE user_name=$user_name");
$res_password = $get_props_instance->get_prop('admin', '*', "WHERE user_name=$password");

// extact data from query, if exist...
$res_user_name = empty($res_user_name) ? null : $res_user_name->fetch_object();
$res_password = empty($res_password) ? null : $res_password->fetch_object();

// valido que sea coincidente
$user_name_checked = $res_user_name ? ($res_user_name->user_name == $user_name) : null;
$password_checked = $res_password ? ($res_password->password == $password) : null;
$final_validate = ($user_name_checked and $password_checked);
// -----------------------------

$msg = null;

if ($final_validate) {
    // destruyo sessiones activas
    session_unset();
    // inicio una sesión
    session_start();
    $_SESSION['user_name'] = $user_name;
    // redirecciono
    header("Location: ./../index.php");
} else {

    $msg .= $user_name_checked ? '' : "nombre no válido<br>";
    $msg .= $password_checked ? '' : "constraseña no válida";

    $code = 404;
    header("Location: ./../login.php?msg=$msg&code=$code");
    exit();
}
