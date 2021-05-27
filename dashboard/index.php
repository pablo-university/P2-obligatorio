<?php include_once __DIR__.'/components/login_session.php';?>
<?php include_once __DIR__ . '/components/layout_dashboard.php'; ?>
<?php include_once __DIR__ . '/components/header_content.php'; ?>
<?php include_once __DIR__ . '/api/class_chart_info.php'; ?>
<?php include_once __DIR__ . '/../connectors/connection.php'; ?>



<?php $content_dashboard = function () use ($conn) { ?>

  <?php header_content('Dashboard') ?>

  <!-- CARDS DE NIEVL SUPERIOR -->
  <?php include_once __DIR__ . '/components/index_card_top.php'; ?>

  <?php
  // inicio mis objetos
  $chartUserType = new Chart_info($conn, 'user_type');
  $moment = new Chart_info($conn, 'moment');
  $brand = new Chart_info($conn, 'brand');

  ?>
  <main>
    <div class="row row-cols-md-2
     charts">
      <!-- user type -->
      <div>
        <canvas style="height: 100%!important;" id="chartMoment" data-chart='<?= $moment->chart_main(); ?>'>
        </canvas>
      </div>

      <!-- chartUserType -->
      <div>
        <canvas id="chartUserType" data-chart='<?= $chartUserType->chart_main(); ?>'>
        </canvas>
      </div>
    </div>

    <!-- brand -->
    <canvas id="chartBrands" data-chart='<?= $brand->chart_main(); ?>'>
    </canvas>


  </main>





<?php } ?>

<?php layout_dashboard($content_dashboard) ?>