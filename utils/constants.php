<?php

// usa el puerto localhost puerto 80 del apache
// en caso de que el proyecto se coloque en otra carpeta
// se deberá modificar esta ruta, ejemplo:
/**
 * usa el puerto localhost puerto 80 del apache
 * 
 * en caso de que el proyecto se coloque en otra carpeta se deberá modificar esta ruta, ejemplo:
 * si está en htdoc solo va _SERVER, si está en htdoc>pepe
 * será _SERVER/pepe/ y asi...
**/
// echo basename(dirname(__DIR__, 1));

// antiguo
// define('LOCAL_HOST', "http://{$_SERVER['HTTP_HOST']}/p2/");

// -----new dinamyccc!!-------
// toma su directorio abuelo (el nombre que quieras ponerle a la carpeta de proyecto)
$dir_grandfather = basename(dirname(__DIR__, 1));
// define localhost como: localhost:puerto/directorio_abuelo_al_actual/ 
define('LOCAL_HOST', "http://{$_SERVER['HTTP_HOST']}/$dir_grandfather/");


?>


