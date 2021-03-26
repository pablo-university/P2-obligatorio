<?php include_once __DIR__.'/utils/constants.php';?>
<?php include_once __DIR__.'/components/button.php';?>

<!-- ----------CONTENIDO--------------->
<?php $content = function (){ ?>
    <a href="client/">IR A CLIENTE</a>
    <br/>
    <?php button(); ?>
    <?php
        // ejemplo de clase anonima
        $obj = new class() {
            public $bar = 'estas en la carpeta p2, usa /client';
        };
        echo $obj->bar;
        
     ?>
     <br/>
<?php } ?>
<!-- ----------fin de contenido---------->

<?php include_once __DIR__.'/components/template/layout.php';?>
<?php layout($content); ?>