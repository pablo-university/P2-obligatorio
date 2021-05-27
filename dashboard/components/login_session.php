<?php
include_once __DIR__.'/../../utils/constants.php';
// inicio una sesión
session_start();
// chequear si la sesion está en curso o no
if (isset($_SESSION['user_name'])) {
    // si esta seteada no hacer nada, en caso contrario vetarlo
}else{
    session_unset();
    $HOST = LOCAL_HOST;
    header("Location: $HOST/dashboard/login.php?msg=no estás logueado chinwenwencha&code=500");
}