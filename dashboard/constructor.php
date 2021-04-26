<?php include_once __DIR__ . '/components/layout_dashboard.php'; ?>




<?php $content_dashboard = function (): void { ?>

    <?php include_once __DIR__.'/components/constructor/header.php';?>


    <?php include_once __DIR__.'/components/constructor/content.php';?>


<?php } ?>

<?php layout_dashboard($content_dashboard) ?>