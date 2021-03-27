<!-- contenido de client -->
<?php $content = function () { ?>
<div class='container-client'>
    <!-- header -->
    <?php include_once __DIR__.'/header.php';?>
    <!-- ----- -->

    <!-- secciones de client -->
    <?php include_once __DIR__.'/sections.php';?>
    <!-- ---- -->

    <!-- footer -->
    <?php include_once 'footer.php';?>
    <!-------------------------- -->
    
</div> <!-- container-client -->

<?php } ?> <!-- cierre de content -->

<!-- agrego y ejecuto mi template base -->
<?php include_once __DIR__.'/../components/template/layout.php';?>
<?php layout($content); ?>