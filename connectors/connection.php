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

if (!$conn) {
    die("Conección falló: " . mysqli_connect_error());
}
