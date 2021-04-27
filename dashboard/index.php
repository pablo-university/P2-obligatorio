<?php include_once __DIR__ . '/components/layout_dashboard.php'; ?>
<?php include_once __DIR__ . '/components/header_content.php'; ?>




<?php $content_dashboard = function (): void { ?>

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



  <!-- CLASS CHARTS INFO -->
  <?php include_once __DIR__ . '/api/chart_info.php'; ?>

  <?= $chart_info->get_labels_brands(); ?>
  
  <canvas id="chartBrands" data-labels='pepe maria jasin' data-data='10 20 40 20' >
  </canvas>
  <!-- ----------------- -->




<?php } ?>

<?php layout_dashboard($content_dashboard) ?>