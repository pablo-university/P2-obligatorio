<?php include_once __DIR__ . '/components/layout_dashboard.php'; ?>
<?php include_once __DIR__ . '/components/header_content.php'; ?>




<?php $content_dashboard = function (): void { ?>
   <?php include_once __DIR__ . '/controllers/get_all_products.php'; ?>


   <?php header_content('Listado, actualización y eliminación de contenido'); ?>

   <table class="table table-striped table-hover">

      <!-- OBTENGO PRODUCTOS -->
      <?php $res_all_products = $get_all_products(); ?>


      <thead>
         <tr>
            <th>Titulo</th>
            <th>Marca</th>
            <th>case</th>
            <th>display</th>
            <th>momento</th>
            <th>precio</th>
            <th>stock</th>
            <th>Tipo de usuario</th>
            <th>Peso</th>
         </tr>
      </thead>
      <tbody>



         <!-- PINTO PRODUCTOS -->
         <?php while ($data = $res_all_products->fetch_object()) { ?>

            <tr>
               <!-- estos datos estarían incompletos solo serian para mostraer e identificar el producto -->
               <th><?= $data->title ?></th>
               <!-- poner la banda aqui, quiza recicle la funcion de producto especifico -->
               <td><?= $data->brand ?></td>
               <td><?= $data->case ?></td>
               <td><?= $data->display_type ?></td>
               <td><?= $data->moment ?></td>
               <td><?= $data->price ?></td>
               <td><?= $data->stock ?></td>
               <td><?= $data->user_type ?></td>
               <td><?= $data->weight ?></td>
            </tr>

         <?php } ?>



      </tbody>
   </table>

<?php } ?>

<?php layout_dashboard($content_dashboard) ?>