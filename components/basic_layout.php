<!-- funcion principal que define mi layout basico -->
<?php function basic_layout($content) { ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mi primer pg en php</title>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css"></link>

    <link rel="stylesheet" href="../assets/style.css">
</head>

<body class=''>

    <!-- aqui agrego el contenido que sea pasado a la funcion basic_layout -->
    <?php $content(); ?>

    <script src="../assets/index.js"></script>
</body>
</html>

<?php } ?>