<?php include_once __DIR__ . '/components/layout_dashboard.php'; ?>
<?php include_once __DIR__ . '/components/header_content.php'; ?>




<?php $content_dashboard = function (): void { ?>

   <?php include_once __DIR__ . '/controllers/class_get_props.php'; ?>

   <?php header_content('Listado, actualización y eliminación de contenido'); ?>

   <form action="./list_update_delete.php">

      <table class="table table-striped table-hover">

         <!-- OBTENGO PRODUCTOS -->
         <?php $res_all_products = $get_all_products->get_all_products(); ?>

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
                        <a href="./constructor.php?update_at=<?= $data->_id ?>" class="text-secondary bi bi-pencil-square color">
                        </a>
                        <!-- <i class="bi bi-pencil-square"> -->
                     </div>
                  </td>

                  <!-- DELETE (checkbox) -->
                  <td class=''>
                     <div class='form-check'>
                        <input class="form-check-input m-auto" type="checkbox" name="delete[]" value="<?= $data->_id ?>" id="defaultCheck1">
                     </div>
                  </td>

               </tr>


            <?php } ?>



         </tbody>
      </table>

      <!-- ENVIA PARA ELIMINAR -->
      <div class="d-flex justify-content-end">
         <button title="eliminar" type="submit" class="btn btn-primary mb-3">ELIMINAR</button>
      </div>

   </form>



   <p class="text-secondary fst-italic">
      *Se está mostrando una vista simplificada de los datos, no están completos
   </p>
<?php } ?>

<?php layout_dashboard($content_dashboard) ?>