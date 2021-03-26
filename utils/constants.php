<?php

// usa el puerto localhost puerto 80 del apache
define('LOCAL_HOST', "http://{$_SERVER['HTTP_HOST']}/p2/");
// define('LOCAL_HOST', "http://localhost:80/p2/");

/* estas dos lineas son para los include_once, que sean relativos a donde ellos estan y no relativos a donde son ejecutados, asi también en caso que esos componentes tengan dependencias no hayan conflictos 
-----------PARA INCLUIR ARCHIVOS-----------------------------
<?php $__DIR__ = __DIR__."/";?>
<?php include_once "{$__DIR__}cambiarRuta.php"; ?>
---------------------------------------------------------
*/
