<?php include_once __DIR__.'/../components/template/layout.php';?>

<!-- contenido de client -->
<?php $content = function () { ?>
<div class='container-client'>
    <!-- header -->
    <?php include_once __DIR__.'/components/header.php';?>
    <!-- ----- -->

    <!-- secciones de client -->
    <?php include_once __DIR__.'/components/index_sections.php';?>
    <!-- ---- -->

    <!-- footer -->
    <?php include_once __DIR__.'/components/footer.php';?>
    <!-------------------------- -->
    
</div> <!-- container-client -->

<?php } ?> <!-- cierre de content -->

<!-- agrego y ejecuto mi template base -->
<?php layout($content); ?>