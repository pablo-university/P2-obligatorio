<?php

include_once __DIR__ . '/../../connectors/connection.php';
include_once __DIR__ . '/../controllers/get_band.php';

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





<h1> <?= !empty($data->title) ? $data->title : 'sin title'; ?> </h1>
<p class="mb-5 lead">
  <?= !empty($data->description) ? $data->description : 'sin description'; ?>
</p>

<div class="mb-5">
  <h3 class="text-black-50 mb-1">
    <?= !empty($data->price) ? 'Precio:' . $data->price . '$' : 'sin precio'; ?>
  </h3>
  <p class="lead fs-6">
    <del><?= !empty($data->price) ? 'Precio antes:' . ($data->price * (1.2)) . '$' : 'sin precio'; ?></del>
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

    <?php
    $no_print = [
      'title',
      'description',
      'price',
      '_id'
    ];

    $traduction = [
      'model' => 'modelo',
      'last_modification' => 'ultima modificacion',
      'display_type' => 'tipo display',
      'stock' => 'stock',
      'band' => 'banda',
      'case' => 'case',
      'color' => 'color',
      'user_type' => 'tipo usuario',
      'moment' => 'momento',
      'brand' => 'marca',
      'submersible' => 'sumergible',
      'shipping' => 'envio',
      'weight' => 'peso',
      'sale' => 'sale',
    ];
    ?>

<!-- recorro resultado de consulta -->
    <?php foreach ($data as $key => $value) { ?>
      <?php if (!in_array($key, $no_print)) { ?>

        <tr>
          <!-- traduzco resultados de propiedad si es posible -->
          <th><?= !empty($traduction[$key]) ? $traduction[$key] : $key ?></th>

          <?php
          // en ciertos casos doy respuestas específicas!
          switch ($key) {

            case 'sale':
              echo '<td>' . ($value ? 'sale!' : 'no') . '</td>';
              break;

            case 'shipping':
              echo '<td>' . ($value ? 'gratis' : 'sin envio') . '</td>';
              break;

            case 'submersible':
              echo '<td>' . ($value ? 'si' : 'no') . '</td>';
              break;

            case 'band':
              echo '<td>' . ($get_band($_id)) . '</td>';
              break;

            default:
              echo '<td>' . ($value ? $value : 'no') . '</td>';
              break;
          }
          ?>

        </tr>

      <?php } ?>
    <?php } ?>


  </tbody>


</table>


<a href="#" class="btn btn-outline-dark">COMPRAR1!</a>