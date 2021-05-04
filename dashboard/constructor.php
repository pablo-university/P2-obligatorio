<?php include_once __DIR__ . '/components/layout_dashboard.php'; ?>
<?php include_once __DIR__.'/components/header_content.php';?>




<?php $content_dashboard = function (): void { ?>

    
    <?php header_content('Gestor de contenidos')?>


    <?php include_once __DIR__.'/components/constructor_content.php';?>


<?php } ?>

<?php layout_dashboard($content_dashboard) ?>