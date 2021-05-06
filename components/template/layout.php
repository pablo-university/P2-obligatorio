<?php include_once __DIR__.'/../../utils/constants.php';?>

<!-- funcion principal que define mi layout basico -->
<?php function layout($content) { ?>

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

    <!-- Bootstrap js -->
    <script src="<?php echo LOCAL_HOST ?>node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
  
    <!-- Bootstrap icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <!-- MY CSS -->
    <link rel="stylesheet" href="<?php echo LOCAL_HOST ?>assets/index.css">

    <!-- Nprogres -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.js" integrity="sha512-bUg5gaqBVaXIJNuebamJ6uex//mjxPk8kljQTdM1SwkNrQD7pjS+PerntUSD+QRWPNJ0tq54/x4zRV8bLrLhZg==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.css" integrity="sha512-DanfxWBasQtq+RtkNAEDTdX4Q6BPCJQ/kexi/RftcP0BcA4NIJPSi7i31Vl+Yl5OCfgZkdJmCqz+byTOIIRboQ==" crossorigin="anonymous" />
</head>

<body class='bg-light'>

    <!-- aqui agrego el contenido que sea pasado a la funcion layout -->
    <?php $content(); ?>

    
    <script type="module" src='<?php echo LOCAL_HOST ?>assets/js/index.js'></script>

</body>

</html>

<?php } ?>