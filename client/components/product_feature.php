<?php

include_once __DIR__ . '/../../connectors/connection.php';
include_once __DIR__ . '/../controllers/product_color.php';
include_once __DIR__ . '/../../utils/constants.php';

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



<hgroup class="d-grid gap-2">
  <!-- titulo + modelo -->
  <div class="d-flex justify-content-between align-items-baseline">
    <h1> <?= !empty($data->title) ? $data->title : 'sin title'; ?> </h1>
    <h4 class="fw-light fs-5">modelo: <?= !empty($data->model) ? $data->model : 'no especificado'; ?> </h4>
  </div>

  <!-- ultima modificacion + descripcion -->
  <div>
    <!-- ultima modificacioon -->
    <time class="text-black-50 fw-light border-bottom">Última modificación: <?= !empty($data->last_modification) ? $data->last_modification : 'sin fecha'; ?></time>
    <!-- descripcion -->
    <p class="lead">
      <?= !empty($data->description) ? $data->description : 'sin description'; ?>
    </p>
  </div>

  <!-- precio -->
  <div class="">
    <!-- precio -->
    <h3 class="text-black-50 mb-1">
      <?= !empty($data->price) ? 'Precio:' . $data->price . '$' : 'sin precio'; ?>
    </h3>
    <!-- precio antes -->
    <p class="lead fs-6">
      <del><?= !empty($data->price) ? 'Precio antes:' . ($data->price * (1.2)) . '$' : 'sin precio'; ?></del>
    </p>
  </div>

  <hr>

  <!-- colores y marca-->
  <div class="row row-cols-3 flex-nowrap gap-md-3">

    <div class="text-center">
      <h3 class="mb-0">Colores</h3>
      <p class="mb-0 text-black-50">disponibles</p>
      <p class="m-0">
        <?php $res_color = $product_color($_id); ?>
        <?php if ($res_color) { ?>
          <?php while ($data_color = $res_color->fetch_object()) { ?>
            <i class="bi bi-circle-fill fs-3" data-bs-toggle="tooltip" data-bs-placement="right" title="<?= $data_color->color ?>" style="color:<?= $data_color->code ?>;"></i>
          <?php } ?>
        <?php } else {?>
        <p>color no asignado</p>
        <?php }?>

      </p>
    </div>

    <div class="text-center">
      <h3 class="m-0 mb-n3">Marca</h3>
      <img class="w-50" style="filter: contrast(0.5);" src="<?= LOCAL_HOST . "assets/img/brands/" . $data->brand . '.svg' ?>" alt="<?= $data->brand ?>" data-bs-toggle="tooltip" data-bs-placement="right" title="<?= $data->brand ?>">
    </div>

    <div class="text-center">
      <h3>Case</h3>
      <div>
        <?=
        match (true) {
          $data->case == 'redondo' => "<i style=\"filter: contrast(0.5);\" class=\"bi bi-watch fs-1\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" title=" . $data->case ."></i>",
          $data->case == 'cuadrado' => "<i style=\"filter: contrast(0.5);\" class=\"bi bi-smartwatch fs-1\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" title=" . $data->case ."></i>"
        }
        ?>
      </div>
    </div>

  </div>

  <hr>
</hgroup>


<p>
  <button class="btn btn-outline-primary" type="button" name="hidden_button" data-bs-toggle="collapse" data-bs-target="#table-product" aria-expanded="false" aria-controls="collapseExample">
    Catracterísticas
  </button>
</p>

<table class="table table-hover table-light collapse" id="table-product">
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
      'model',
      'brand',
      'color',
      'case'
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
              echo '<td>' . ($value ? 'en sale!' : 'no') . '</td>';
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


  </tbody>


</table>


<a href="#" class="btn btn-primary">LO QUIERO!</a>