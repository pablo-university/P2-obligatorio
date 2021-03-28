<?php include_once __DIR__ . '/../../utils/constants.php'; ?>
<?php function card_product($content): void
{ ?>
    <?php

    [
        '_id' => $_id,
        'img' => $img,
        'title' => $title,
        'price' => $price,
        'sale' => $sale
    ] = $content;
    ?>

    <!-- CARD -->
    <div class='col'>
        <div class="card card--product bg-transparent" style="max-width: 18rem;">
            <a href="<?php echo (true ? "./product.php?_id=$_id" : 'no encontre id'); ?>">
                <img src="<?php echo LOCAL_HOST . $img; ?>" class="card-img" alt="...">
            </a>
            <!-- chequeo si existe el sale -->
            <?php if (!empty($sale)) : ?>
                <div class="card-img-overlay text-start card__sale">
                    SALE!
                </div>
            <?php endif ?>

            <div class="card-body text-start">
                <h5 class="card-title"><?php echo (!empty($title) ? $title : '_sin titulo_'); ?></h5>
                <p class="card-text"><?php echo (!empty($price) ? "$" . $price : '_sin price'); ?></p>
                <p class="card-text text-secondary">IVA INCLUIDO</p>
            </div>
        </div>
    </div>

<?php } ?>