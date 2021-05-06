<?php include_once __DIR__ . '/../../utils/constants.php'; ?>
<?php function card_product($content): void
{ ?>
    <?php

    // asigno true o false sale si es [0 o 1]
    if (empty(!$content['sale'])) {
        $content['sale'] = $content['sale'] == '1' ? true : false;
    }

    ?>

    <!-- CARD -->
    <div class='col'>
        <div class="card card--product" style="max-width: 18rem;">
            <a href="<?php echo (!empty($content['_id']) ? "./product.php?_id=$content[_id]" : 'no encontre id'); ?>">
                <img src="<?php echo LOCAL_HOST .'/assets/img/products/'. $content['img']; ?>" class="card-img" alt="...">
            </a>
            <!-- chequeo si existe el sale -->
            <?php if (!empty($content['sale'])) : ?>
                <div class="card-img-overlay text-start card__sale">
                    SALE!
                </div>
            <?php endif ?>

            <div class="card-body text-start">
                <h5 class="card-title"><?php echo (!empty($content['title']) ? $content['title'] : '_sin titulo_'); ?></h5>
                <p class="card-text"><?php echo (!empty($content['price']) ? "$" . $content['price'] : '_sin price'); ?></p>
                <p class="card-text text-secondary">IVA INCLUIDO</p>
            </div>
        </div>
    </div>

<?php } ?>