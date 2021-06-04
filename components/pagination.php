<?php function pagination($url = null)
{ ?>

    <!-- incluyo controlador get props -->
    <?php include_once __DIR__ . '/../dashboard/controllers/get_props.php';


    // obtener pagina actual si existe
    $current_page = isset($_REQUEST['current_page']) ? $_REQUEST['current_page'] : 0;
    // defino artiulos por pagina
    $amount = 5;
    ?>

    <!-- paginación -->
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?php
            // get total rows
            $res_all_products = $get_props_instance->get_all_products();
            $total_pages = $res_all_products->num_rows / $amount;
            $total_pages = ($total_pages - intval($total_pages)) == 0 ? $total_pages : intval($total_pages) + 1;
            ?>
            <li class="page-item"><a href="<?= $url ?>?current_page=0" class="page-link">Inicio</a></li>

            <!-- solucionar como y cuantas paginas se imprimen...-->
            <?php for ($i = (($current_page) > 0) ? $current_page - 1 : $current_page; ($i < ($current_page + 3)) and ($i < $total_pages); $i++) { ?>

                <li class="page-item <?= $current_page == $i ? 'active' : '' ?>"><a href="<?= $url ?>?current_page=<?= $i ?>" class="page-link"><?= $i ?></a></li>
            <?php } ?>

            <li class="page-item"><a class="page-link" href="<?= $url ?>?current_page=<?= $total_pages - 1 ?>">Final</a></li>
        </ul>
    </nav>



<?php } ?>