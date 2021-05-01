<?php include_once __DIR__ . '/../controllers/class_get_props.php'; ?>

<?php $values_for_get = [
  'sale' => 'productos de linea que están en sale',
  'shipping' => 'cantidad con envío gratuito',
  'submersible' => 'en estado sumergible'
]; ?>




<div class="d-flex justify-content-start flex-wrap gap-5">
  <?php foreach ($values_for_get as $key => $value) { ?>
    <?php $res = $count_value_in_true->count_value_in_true('products', $key)->fetch_object()->res; ?>
    <!-- <div class="col"> -->
    <div class="card flex-fill border-0 shadow-sm mb-3 p-0 hover-shadow-lg" style="max-width: 18rem;">
      <div class="card-header"><?= $key ?></div>
      <div class="card-body text-dark">
        <p class="card-text fw-light mb-2"> <?= $value ?></p>
        <h2 class="card-title display-6 fw-bold"><?= $res ?></h2>
      </div>
      <!-- </div> -->
    </div>
  <?php } ?>
</div>