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

// SET DE CARACTERES LINUX?
// $conn->set_charset("utf8");
mysqli_set_charset($conn, "UTF8");
// printf("Conjunto de caracteres inicial: %s\n", $conn->character_set_name());

if (!$conn) {
    die("Conección falló: " . mysqli_connect_error());
}
