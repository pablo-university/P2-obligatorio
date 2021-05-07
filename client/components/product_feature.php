<?php

include_once __DIR__ . '/../../connectors/connection.php';
include_once __DIR__ . '/../controllers/product_color.php';

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



<hgroup>
  <!-- titulo -->
  <div class="d-flex justify-content-between align-items-baseline mb-4">
    <h1> <?= !empty($data->title) ? $data->title : 'sin title'; ?> </h1>
    <h4 class="fw-light fs-5">modelo: <?= !empty($data->model) ? $data->model : 'no especificado'; ?> </h4>
  </div>
  <!-- ultima modificacioon -->
  <time class="text-black-50 fw-light mb-1 border-bottom">Última modificación: <?= !empty($data->last_modification) ? $data->last_modification : 'sin fecha'; ?></time>
  <!-- descripcion -->
  <p class="mb-5 lead">
    <?= !empty($data->description) ? $data->description : 'sin description'; ?>
  </p>

  <div class="mb-5">
    <!-- precio -->
    <h3 class="text-black-50 mb-1">
      <?= !empty($data->price) ? 'Precio:' . $data->price . '$' : 'sin precio'; ?>
    </h3>
    <!-- precio antes -->
    <p class="lead fs-6">
      <del><?= !empty($data->price) ? 'Precio antes:' . ($data->price * (1.2)) . '$' : 'sin precio'; ?></del>
    </p>
  </div>
</hgroup>


<table class="table table-hover table-light">
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
      '_id',
      'last_modification',
      'model'
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

            default:
              echo '<td>' . ($value ? $value : '-') . '</td>';
              break;
          }
          ?>

        </tr>

      <?php } ?>
    <?php } ?>

    <tr>
      <th>color disponible</th>
      <td class="p-0">
        <?php $res = $product_color($_id); ?>
        <?php while ($data = $res->fetch_object()) { ?>
          <i class="bi bi-circle-fill fs-3" title="<?= $data->color ?>" style="color:<?= $data->code ?>;"></i>
        <?php } ?>
      </td>
    </tr>


  </tbody>


</table>


<a href="#" class="btn btn-outline-dark">LO QUIERO</a>