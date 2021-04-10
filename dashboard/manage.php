<?php include_once __DIR__ . '/../components/template/layout.php'; ?>
<?php include_once __DIR__ . '/components/layout_dashboard.php'; ?>

<?php $content = function (): void { ?>



    <?php $content_dashboard = function (): void { ?>
        
          <h3>pagina 2 php</h3>
        
    <?php } ?>

    <?php layout_dashboard($content_dashboard) ?>




<?php } ?>
<!-- cierre de layout -->

<?php layout($content) ?>