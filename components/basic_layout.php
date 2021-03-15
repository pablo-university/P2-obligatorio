<?php $__DIR__ = __DIR__."/";?>
<?php include_once "$__DIR__../utils/constants.php"; ?>

<!-- funcion principal que define mi layout basico -->
<?php function basic_layout($content) { ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mi primer pg en php</title>

    <!-- fuente -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;300;400;500;700&display=swap"
        rel="stylesheet">

    <script src="<?php echo LOCAL_HOST ?>node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="<?php echo LOCAL_HOST ?>node_modules/bootstrap/dist/css/bootstrap.css">
    </link>

    <link rel="stylesheet" href="<?php echo LOCAL_HOST ?>assets/index.css">
</head>

<body class=''>

    <!-- aqui agrego el contenido que sea pasado a la funcion basic_layout -->
    <?php $content(); ?>

    
    <script src='<?php echo LOCAL_HOST ?>assets/index.js'></script>
    <!-- <script src='../assets/index.js'></script> -->

</body>

</html>

<?php } ?>