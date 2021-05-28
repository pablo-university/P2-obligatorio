<?php $res_product_image = $get_props_instance->get_prop('images', '*', "WHERE images.id_product = $data->_id"); ?>
<?php $value = $res_product_image->fetch_array() ?>

    <div class="">
        <?php if (!empty($value['url'])) {
            $HOST = LOCAL_HOST;
            $img = $value['url'];
            echo "<img class='' style='max-width: 3rem;' src=\"{$HOST}assets/img/products/{$img} \" >";
        } ?>

    </div>