<?php 
$SELECT_FROM = "
SELECT P._id, I.url, P.title, P.price, P.sale
FROM products AS P
";
$JOIN_IMAGES = "
INNER JOIN images AS I
ON P._id = I.id_product
";
$WHERE = isset($_REQUEST['_id']) ? 'P._id != $_REQUEST[_id]' : '';
// traer productos (3)
/* 
SELECT column FROM table
WHERE id != 
ORDER BY RAND()
LIMIT 3 */
$query = "
$SELECT_FROM
$JOIN_IMAGES
$WHERE
ORDER BY RAND()
LIMIT 3 
";
// imprimir esta query antes

// si no retorno resultados o es menor que uno retornar que no hay coincidencias o directamente ''
?>

<h3>Relacionados</h3>
<div>
<p>contenido relacionado tarjetas</p>
</div>