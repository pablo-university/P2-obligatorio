<?php $__DIR__ = __DIR__."/";?>
<?php include_once "{$__DIR__}/utils/constants.php"; ?>
<?php include_once "{$__DIR__}/components/button.php"; ?>


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
        button();
        button();
        button();
        button();
        button();
        button();
        button();
     ?>
     <br/>
<?php } ?>

<?php include_once 'components/basic_layout.php'; ?>
<?php basic_layout($content); ?>