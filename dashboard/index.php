<?php include_once __DIR__ . '/components/layout_dashboard.php'; ?>
<?php include_once __DIR__ . '/components/header_content.php'; ?>
<?php include_once __DIR__ . '/api/class_chart_info.php'; ?>
<?php include_once __DIR__ . '/../connectors/connection.php'; ?>



<?php $content_dashboard = function () use ($conn) { ?>

  <?php header_content('Dashboard') ?>

  <!-- CARDS DE NIEVL SUPERIOR -->

  <div class="row row-cols-lg-4 g-2">
    <?php for ($i = 0; $i < 4; $i++) {   ?>
      <div class="col">
        <div class="card border-0 shadow-sm mb-3 hover-shadow-lg" style="max-width: 18rem;">
          <div class="card-header">Headder</div>
          <div class="card-body text-dark">
            <p class="card-text fw-light mb-2"> of the card's content.</p>
            <h2 class="card-title display-6 fw-bold">Dark card title</h2>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>

  <?php
  // inicio mis objetos
  $chartUserType = new Chart_info($conn, 'user_type');
  $moment = new Chart_info($conn, 'moment');
  $brand = new Chart_info($conn, 'brand');

  ?>
  <main>
    <div class="row row-cols-md-2
     charts">
      <!-- chartUserType -->
      <div>
        <canvas id="chartUserType" data-chart='<?= $chartUserType->chart_main(); ?>'>
        </canvas>
      </div>

      <!-- user type -->
      <div>
        <canvas style="height: 100%!important;"  id="chartMoment" data-chart='<?= $moment->chart_main(); ?>'>
        </canvas>
      </div>
    </div>

    <!-- brand -->
    <canvas id="chartBrands" data-chart='<?= $brand->chart_main(); ?>'>
    </canvas>


  </main>





<?php } ?>

<?php layout_dashboard($content_dashboard) ?>