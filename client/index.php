

    <?php include_once '../components/head.php'; ?>

    <!-- decidir que layout pintar -->
    <?php include_once 'layout.php'; ?>
    
    <?php 
    if (isset($pepee)){
        echo 'existe'; 
    } else{
        echo 'NO EXISTE'; 
    }
    
    
    ?>

    <?php include_once '../components/foot.php'; ?>