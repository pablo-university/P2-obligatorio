<?php include_once __DIR__ . '/../../utils/constants.php'; ?>
<?php function card_product($content): void
{ ?>
    

        <!-- CARD -->
        <div class="card bg-transparent" style="max-width: 18rem;">
            <img src="<?php echo LOCAL_HOST; ?>/assets/img/client-card-1.jpg" class="card-img" alt="...">
            <div class="card-img-overlay text-start detail-sale">
                SALE!
            </div>
            <div class="card-body text-start">
                <h5 class="card-title">Titulo Producto</h5>
                <p class="card-text">$450</p>
                <p class="card-text">IVA INCLUIDO</p>
            </div>
        </div>
   
<?php } ?>


<!-- NOTAS!!!
- marcar parametros de llegada en la card!
hacer validaciones si parametros no existen

-->