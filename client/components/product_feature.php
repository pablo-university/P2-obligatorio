<?php

include_once __DIR__ . '/../../connectors/connection.php';

$_id = $_REQUEST['_id'];

$query = "
SELECT * FROM products
WHERE _id = $_id
";

$res = $conn->query($query);

if ($res->num_rows < 1) :
  echo "no hay resultados";
else :
  $data = $res->fetch_object();
endif;
?>





<h1> <?= !empty($data->title) ? $data->title : 'sin title';?> </h1>
<p class="mb-5 lead">
<?= !empty($data->description) ? $data->description : 'sin description';?> 
</p>

<div class="mb-5">
  <h3 class="text-black-50 mb-1">
  <?= !empty($data->price) ? 'Precio:'.$data->price.'$' : 'sin precio';?>
  </h3>
  <p class="lead fs-6">
  <del><?= !empty($data->price) ? 'Precio antes:'.($data->price*(1.2)).'$' : 'sin precio';?></del>
  </p>
</div>


<table class="table table-striped table-hover table-light">
  <!-- caption-top -->
  <caption>Lista de características</caption>
  <thead class="table-dark">
    <tr>
      <th>Característica</th>
      <th>Valor</th>
    </tr>
  </thead>


  <tbody>
    
      <tr>
        <th>modelo</th>
        <td><?= !empty($data->model) ? $data->model : 'empty';?></td>
      </tr>
      <tr>
        <th>display_type</th>
        <td><?= !empty($data->display_type) ? $data->display_type : 'empty';?></td>
      </tr>
      <tr>
        <th>stock</th>
        <td><?= !empty($data->stock) ? $data->stock : 'sin stock';?></td>
      </tr>

      <tr>
        <th>band</th>
        <td><?= !empty($data->band) ? $data->band : 'empty';?></td>
      </tr>
      <tr>
        <th>case</th>
        <td><?= !empty($data->case) ? $data->case : 'empty';?></td>
      </tr>
      <tr>
        <th>color</th>
        <td><?= !empty($data->color) ? $data->color : 'empty';?></td>
      </tr>

      <tr>
        <th>user_type</th>
        <td><?= !empty($data->user_type) ? $data->user_type : 'empty';?></td>
      </tr>
      <tr>
        <th>moment</th>
        <td><?= !empty($data->moment) ? $data->moment : 'empty';?></td>
      </tr>
      <tr>
        <th>band</th>
        <td><?= !empty($data->band) ? $data->band : 'empty';?></td>
      </tr>

      <tr>
        <th>submersible</th>
        <td><?= !empty($data->submersible) ? $data->submersible : 'empty';?></td>
      </tr>
      <tr>
        <th>shipping</th>
        <td><?= !empty($data->shipping) ? $data->shipping : 'empty';?></td>
      </tr>
      <tr>
        <th>weight</th>
        <td><?= !empty($data->weight) ? $data->weight : 'empty';?></td>
      </tr>
      <tr>
        <th>sale</th>
        <td><?= !empty($data->sale) ? $data->sale : 'empty';?></td>
      </tr>

  </tbody>


</table>


<a href="#" class="btn btn-outline-dark">COMPRAR1!</a>
