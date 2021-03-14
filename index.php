<?php $content = function (){ ?>
    <a href="client/">IR A CLIENTE</a>
    <br/>
    <br/>
    <?php
        // ejemplo de clase anonima
        $obj = new class() {
            public $bar = 'estas en la carpeta p2, usa /client';
        };
        echo $obj->bar;
     ?>
     <br/>
<?php } ?>

<?php include_once 'components/basic_layout.php'; ?>
<?php basic_layout($content); ?>