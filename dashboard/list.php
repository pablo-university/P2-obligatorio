<?php include_once __DIR__ . '/components/layout_dashboard.php'; ?>




<?php $content_dashboard = function (): void { ?>

   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center p-3 mb-3 border-bottom">
      <h1 class="h2">Gestor de contenidos</h1>
   </div>

   <table class="table table-striped table-hover">
      <thead>
         <tr>
            <th>#</th>
            <th First</th>
            <th>Last</th>
            <th>Handle</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <th>1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
         </tr>
         <tr>
            <th>2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
         </tr>
         <tr>
            <th>3</th>
            <td>Larry the Bird</td>
            <td>@twitter</td>
            <td>@twitter</td>
         </tr>
      </tbody>
   </table>

<?php } ?>

<?php layout_dashboard($content_dashboard) ?>