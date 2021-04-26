<?php include_once __DIR__ . '/components/layout_dashboard.php'; ?>
<?php include_once __DIR__.'/components/header_content.php';?>



<?php $content_dashboard = function (): void { ?>

   
   <?php header_content('Listado, actualización y eliminación de contenido');?>

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

