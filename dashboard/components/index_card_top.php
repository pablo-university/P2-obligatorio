<?php include_once __DIR__ . '/../controllers/get_props.php'; ?>

<?php $values_for_get = [
  'Sale' => 'Productos de linea que están en sale',
  'Shipping' => 'Cantidad con envío gratuito',
  'Submersible' => 'Con propiedad de estado sumergible'
]; ?>




<div class="d-flex justify-content-around justify-content-md-start flex-wrap gap-5">
  <?php foreach ($values_for_get as $key => $value) { ?>
    <?php $res = $get_props_instance->count_value_in_true('products', $key)->fetch_object()->res; ?>
    <!-- <div class="col"> -->
    <div class="card flex-fill border-0 shadow-sm mb-3 p-0 hover-shadow-lg" style="max-width: 18rem;">
      <div class="card-header"><?= $key ?></div>
      <div class="card-body text-dark d-flex flex-column">
        <p class="card-text fw-light mb-2"> <?= $value ?></p>
        <h2 class="card-title display-6 fw-bold mt-auto"><?= $res ?></h2>
      </div>
      <!-- </div> -->
    </div>
  <?php } ?>

    <!-- static card AVG-->
    <?php $res = $get_props_instance->get_avg('products', 'stock')->fetch_object()->res; ?>
    <div class="card flex-fill border-0 shadow-sm mb-3 p-0 hover-shadow-lg" style="max-width: 18rem;">
      <div class="card-header"> Stock promedio </div>
      <div class="card-body text-dark d-flex flex-column">
        <p class="card-text fw-light mb-2"> Promedio de stock de cada producto </p>
        <h2 class="card-title display-6 fw-bold mt-auto"> <?= round($res) ?> </h2>
      </div>
      <!-- </div> -->
    </div>
</div>