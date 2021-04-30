<?php include_once __DIR__ . '/components/layout_dashboard.php'; ?>
<?php include_once __DIR__ . '/components/header_content.php'; ?>
<?php include_once __DIR__.'/api/class_chart_info.php';?>
<?php include_once __DIR__.'/../connectors/connection.php';?>



<?php $content_dashboard = function () use ($conn){ ?>

  <?php header_content('Dashboard') ?>

  <!-- CARDS DE NIEVL SUPERIOR -->

  <div class="row row-cols-lg-4 g-2">
    <?php for ($i = 0; $i < 4; $i++) {   ?>
      <div class="col">
        <div class="card border-dark mb-3" style="max-width: 18rem;">
          <div class="card-header">Headder</div>
          <div class="card-body text-dark">
            <h5 class="card-title">Dark card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
          <div class="card-footer text-dark">
            <h1>sss</h1>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>

<?php 
// inicio mis objetos
$chartUserType = new Chart_info($conn, 'user_type');
$brand = new Chart_info($conn, 'brand');

?>

  <canvas id="chartUserType" data-chart='<?= $chartUserType->chart_main(); ?>'>
  </canvas>


  <!-- obtengo los datos con la api que me armé con php -->
  <canvas id="chartBrands" data-chart='<?= $brand->chart_main(); ?>'>
  </canvas>
  <!-- ----------------- -->




<?php } ?>

<?php layout_dashboard($content_dashboard) ?>