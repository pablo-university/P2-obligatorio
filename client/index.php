<!-- contenido de client -->
<?php $content = function () { ?>
<div class='container-client'>
    <?php include_once 'header.php';?>

    <div class='container min-vh-100 col-xxl-10 bg-light py-5'>

        

    </div>

    

    <!-- footer -->
    <?php include_once 'footer.php';?>
    <!-------------------------- -->
    
</div> <!-- container-client -->

<?php } ?> <!-- cierre de content -->

<!-- agrego y ejecuto mi template base -->
<?php include_once __DIR__.'/../components/template/layout.php';?>
<?php layout($content); ?>