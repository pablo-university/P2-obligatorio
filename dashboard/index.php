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