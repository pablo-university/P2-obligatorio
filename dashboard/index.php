<?php include_once __DIR__ . '/../components/template/layout.php'; ?>
<?php include_once __DIR__ . '/components/layout_dashboard.php'; ?>

<?php $content = function (): void { ?>



  <?php $content_dashboard = function (): void { ?>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Dashboard</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <button type="button" class="btn btn-sm btn-outline-secondary">Compartir</button>
          <button type="button" class="btn btn-sm btn-outline-secondary">Exportar data</button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
          <span data-feather="calendar"></span>
          This week
        </button>
      </div>
    </div>

    <!-- CARDS DE NIEVL SUPERIOR -->

    <div class="row row-cols-lg-4 g-2">
      <?php for ($i = 0; $i < 4; $i++) {   ?>
        <div class="col">
          <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
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


    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

    <h2>Section title</h2>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>#</th>
            <th>Header</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1,001</td>
            <td>random</td>

          </tr>
        </tbody>
      </table>
    </div>

  <?php } ?>





  <?php layout_dashboard($content_dashboard) ?>

<?php } ?>
<!-- cierre de layout -->

<?php layout($content) ?>