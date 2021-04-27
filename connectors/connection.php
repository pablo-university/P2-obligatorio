<?php 

const HOST = "localhost";
const USER_NAME = "root";
const PASSWORD = "";
const DB = "watch_shop";

/* $data_conection = (object)[
    'host'=>'localhost',
    'user_name'=>'root',
    'password'=>'',
    'db'=>'watch_shop',
]; */


$conn = mysqli_connect(HOST, USER_NAME, PASSWORD, DB);

// CONFIGS
$conn->set_charset("utf8");
// mysqli_set_charset($conn, "UTF8");
// printf("Conjunto de caracteres inicial: %s\n", $conn->character_set_name());
// MOSTRAR ERRORES
ini_set('display_errors', 1);
// --------

if (!$conn) {
    die("Conección falló: " . mysqli_connect_error());
}
