<?php include_once __DIR__ . '/components/layout_dashboard.php'; ?>
<?php include_once __DIR__ . '/components/header_content.php'; ?>
<?php include_once __DIR__ . '/components/login_session.php'; ?>



<?php $content_dashboard = function (): void { ?>

   <!-- incluyo controlador get props -->
   <?php include_once __DIR__ . '/controllers/get_props.php'; ?>

   <!-- titulo  -->
   <?php header_content('Listado, actualización y eliminación de contenido'); ?>

   <!-- COMPONENTE MENSAJES -->
   <?php include_once __DIR__ . '/components/msg.php'; ?>

   <form action="./controllers/delete_products.php">

      <div class="table-responsive">
         <table class="table table-hover">


            <?php
            // TRAE PRODUCTOS DEPENDIENDO SI HAY BUSQUEDA O NO
            // asigna la pagina actual
            $current_page = isset($_REQUEST['current_page']) ? $_REQUEST['current_page'] : 0;
            // defino artiulos por pagina
            $amount = 8;
            // obtengo respuesta
            $res_all_products = $get_props_instance->get_all_products($current_page, $amount);


            ?>


            <!-- PINTO PRODUCTOS -->
            <?php if (!isset($res_all_products) or ($res_all_products->num_rows < 1)) { ?>
               <?= 'no hay resultados coincidentes' ?>
            <?php } else { ?>

               <thead>

                  <tr>
                     <?php $tooltip_order = 'data-bs-toggle="tooltip" data-bs-placement="top" title="ordenar!"'; ?>

                     <th>Imagen</th>
                     <th><a class="link-success" href=" <?= $_SERVER['PHP_SELF'] ?>?orderBy=title" <?= $tooltip_order ?>>Titulo</a></th>
                     <th><a class="link-success" href=" <?= $_SERVER['PHP_SELF'] ?>?orderBy=brand" <?= $tooltip_order ?>>marca</a></th>
                     <th><a class="link-success" href=" <?= $_SERVER['PHP_SELF'] ?>?orderBy=case" <?= $tooltip_order ?>>case</a></th>
                     <th><a class="link-success" href=" <?= $_SERVER['PHP_SELF'] ?>?orderBy=display_type" <?= $tooltip_order ?>>display</a></th>
                     <th><a class="link-success" href=" <?= $_SERVER['PHP_SELF'] ?>?orderBy=moment" <?= $tooltip_order ?>>momento</a></th>
                     <th><a class="link-success" href=" <?= $_SERVER['PHP_SELF'] ?>?orderBy=price" <?= $tooltip_order ?>>precio</a></th>
                     <th><a class="link-success" href=" <?= $_SERVER['PHP_SELF'] ?>?orderBy=stock" <?= $tooltip_order ?>>stock</a></th>
                     <th><a class="link-success" href=" <?= $_SERVER['PHP_SELF'] ?>?orderBy=user_type" <?= $tooltip_order ?>>usuario</a></th>
                     <th><a class="link-success" href=" <?= $_SERVER['PHP_SELF'] ?>?orderBy=weight" <?= $tooltip_order ?>>peso</a></th>
                     <th>Actualizar</th>
                     <th>Eliminar</th>
                  </tr>
               </thead>
               <tbody>


                  <!-- GENERA FILAS DE LA TABLA -->
                  <?php while ($data = $res_all_products->fetch_object()) { ?>



                     <tr>
                        <td>
                           <!-- TRAE IMÁGENES DE PRODUCTO QUE SE ESTE RECORRIENDO -->
                           <?php include __DIR__ . '/components/list_get_image.php'; ?>
                        </td>
                        <td><a href="./../client/product.php?_id=<?= $data->_id ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Ver producto"><?= $data->title ?></a></td>
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
                              <a href="./constructor.php?update_at=<?= $data->_id ?>" class="text-secondary bi bi-pencil-square color" data-bs-toggle="tooltip" data-bs-placement="top" title="Actualizar">
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
      </div>


      <!-- ENVIA PARA ELIMINAR -->
      <div class="d-flex justify-content-end">
         <button title="eliminar" type="submit" class="btn btn-primary mb-3">ELIMINAR</button>
      </div>

   </form>

   <!-- paginación -->
   <nav aria-label="Page navigation example">
      <ul class="pagination">
         <?php
               // get total rows
               $res_all_products = $get_props_instance->get_all_products();
               $total_pages = $res_all_products->num_rows / $amount;
               $total_pages = ($total_pages - intval($total_pages)) == 0 ? $total_pages : intval($total_pages) + 1;
         ?>
         <li class="page-item"><a href="./list_update_delete.php?current_page=0" class="page-link">Inicio</a></li>

         <!-- solucionar como y cuantas paginas se imprimen...-->
         <?php for ($i = (($current_page) > 0) ? $current_page - 1 : $current_page; ($i < ($current_page + 3)) and ($i < $total_pages); $i++) { ?>

            <li class="page-item <?= $current_page == $i ? 'active' : '' ?>"><a href="./list_update_delete.php?current_page=<?= $i ?>" class="page-link"><?= $i ?></a></li>
         <?php } ?>

         <li class="page-item"><a class="page-link" href="./list_update_delete.php?current_page=<?= $total_pages - 1 ?>">Final</a></li>
      </ul>
   </nav>

   <!-- incluir aqui componente de paginacion para optimizar -->

   <p class="text-secondary fst-italic">
      *Se está mostrando una vista simplificada de los datos, clickea en el título para ampliar
   </p>

<?php } ?>
<!-- if de si search esat seteado -->

<?php } ?>

<?php layout_dashboard($content_dashboard) ?>