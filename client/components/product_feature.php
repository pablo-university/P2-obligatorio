<?php 

include_once __DIR__.'/../../connectors/connection.php';

$_id = $_REQUEST['_id'];

$query = "
SELECT * FROM products
WHERE _id = $_id
";

$res = $conn->query($query);

if ($res->num_rows < 1):
  echo "no hay resultados";
else:
  while ($data = $res->fetch_object()):
    
  endwhile;
endif;



?>


<h1>Titulo de producto</h1>
<p class="mb-5 lead">descripcion breve o detalle</p>

<div class="mb-5">
  <h3 class="text-black-50 mb-1">Precio: 345$</h3>
  <p class="lead">antes precio - 10%</p>
</div>


<table class="table table-striped table-hover table-light">
  <!-- caption-top -->
  <caption>List of users</caption>
  <thead class="table-dark">
    <tr>
      <th>Tipologia</th>
      <th>Last</th>
    </tr>
  </thead>


  <tbody>
    <?php for ($i = 0; $i < 10; $i++) { ?>
      <tr>
        <th>propiedad</th>
        <td>valor <?php echo "$i"; ?></td>
      </tr>
    <?php } ?>


  </tbody>


</table>


<a href="#" class="btn btn-outline-dark">COMPRAR1!</a>