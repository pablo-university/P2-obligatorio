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
            <th>Actualizar</th>
            <th>Eliminar</th>
         </tr>
      </thead>
      <tbody>

         <form action="./A">

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

                  <!-- UPDATE -->
                  <td class=''>
                     <div class='form-check'>
                        <form action="./list_update_delete.php?update_at=<?= $data->_id ?>"> 
                           <button title="Actualizar" type="submit" class="border rounded-circle w-auto"><i class="bi bi-pencil-square"></i></button>
                        </form>
                     </div>
                  </td>

                  <!-- DELETE -->
                  <td class=''>
                     <div class='form-check'>
                        <input class="form-check-input m-auto" type="checkbox" name="exampleRadios" value="" id="defaultCheck1">
                     </div>
                  </td>

               </tr>


            <?php } ?>

            <tr>
               <td colspan="9"></td>
               <td>otter</td>
               <td>ELIMINAR</td>
            </tr>

            <!-- AQUI BTN ELIMINAR -->
         </form>


      </tbody>
   </table>






   <p class="text-secondary fst-italic">
      *Se está mostrando una vista simplificada de los datos, no están completos
   </p>
<?php } ?>

<?php layout_dashboard($content_dashboard) ?>