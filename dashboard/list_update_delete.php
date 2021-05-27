<?php include_once __DIR__ . '/components/layout_dashboard.php'; ?>
<?php include_once __DIR__ . '/components/header_content.php'; ?>
<?php include_once __DIR__.'/components/login_session.php';?>



<?php $content_dashboard = function (): void { ?>

   <!-- incluyo controlador get props -->
   <?php include_once __DIR__ . '/controllers/get_props.php'; ?>

   <!-- titulo  -->
   <?php header_content('Listado, actualización y eliminación de contenido'); ?>

   <!-- MUESTRA SI HAY MENSAJES -->
   <?php if (!empty($_REQUEST['msg'])) { ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
         <?= $_REQUEST['msg'] ?>
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
   <?php } ?>

   <form action="./controllers/delete_products.php">

      <div class="table-responsive">
         <table class="table table-hover">


            <!-- traigo datos dependiendo de si hay busqueda o no -->
            <?php $res_all_products = $get_props_instance->get_all_products(); ?>


            <!-- PINTO PRODUCTOS -->
            <?php if (!isset($res_all_products)) { ?>
               <?= 'no hay resultados coincidentes con la búsqueda' ?>
            <?php } else { ?>

               <thead>

                  <tr>
                     <th><a class="link-success" href=" <?= $_SERVER['PHP_SELF'] ?>?orderBy=title">Titulo</a></th>
                     <th><a class="link-success" href=" <?= $_SERVER['PHP_SELF'] ?>?orderBy=brand">marca</a></th>
                     <th><a class="link-success" href=" <?= $_SERVER['PHP_SELF'] ?>?orderBy=case">case</a></th>
                     <th><a class="link-success" href=" <?= $_SERVER['PHP_SELF'] ?>?orderBy=display_type">display</a></th>
                     <th><a class="link-success" href=" <?= $_SERVER['PHP_SELF'] ?>?orderBy=moment">momento</a></th>
                     <th><a class="link-success" href=" <?= $_SERVER['PHP_SELF'] ?>?orderBy=price">precio</a></th>
                     <th><a class="link-success" href=" <?= $_SERVER['PHP_SELF'] ?>?orderBy=stock">stock</a></th>
                     <th><a class="link-success" href=" <?= $_SERVER['PHP_SELF'] ?>?orderBy=user_type">tipo de usuario</a></th>
                     <th><a class="link-success" href=" <?= $_SERVER['PHP_SELF'] ?>?orderBy=weight">peso</a></th>
                     <th>Actualizar</th>
                     <th>Eliminar</th>
                  </tr>
               </thead>
               <tbody>


                  <?php while ($data = $res_all_products->fetch_object()) { ?>
                     <tr>
                        <!-- estos datos estarían incompletos solo serian para mostraer e identificar el producto -->
                        <th><a href="./../client/product.php?_id=<?= $data->_id ?>"><?= $data->title ?></a></th>
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
      </div>


      <!-- ENVIA PARA ELIMINAR -->
      <div class="d-flex justify-content-end">
         <button title="eliminar" type="submit" class="btn btn-primary mb-3">ELIMINAR</button>
      </div>

   </form>



   <p class="text-secondary fst-italic">
      *Se está mostrando una vista simplificada de los datos, clickea en el título para ampliar
   </p>

<?php } ?>
<!-- if de si search esat seteado -->

<?php } ?>

<?php layout_dashboard($content_dashboard) ?>