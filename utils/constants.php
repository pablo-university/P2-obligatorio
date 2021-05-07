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
define('LOCAL_HOST', "http://{$_SERVER['HTTP_HOST']}/p2/");



