<?php

define('LOCAL_HOST', 'http://localhost:3000/p2/');

/* estas dos lineas son para los include_once, que sean relativos a donde ellos estan y no relativos a donde son ejecutados, asi también en caso que esos componentes tengan dependencias no hayan conflictos 
---------------------------------------------------------
<?php $__DIR__ = __DIR__."/";?>
<?php include_once "{$__DIR__}utils/constants.php"; ?>
---------------------------------------------------------
*/
