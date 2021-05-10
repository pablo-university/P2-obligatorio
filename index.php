<?php include_once __DIR__ . '/utils/constants.php'; ?>
<?php include_once __DIR__ . '/components/button.php'; ?>

<!-- ----------CONTENIDO--------------->
<?php $content = function () { ?>
    <div class="container-fluid mt-5 ms-5">
        <h3 class="mb-5">Hola!! Bienvenid@ al proyecto</h3>
        <pre class="fs-6 fw-lighter">
Estás en el directorio raiz del proyecto, 
podés usar /client para acceder al cliente o usar
los botones que te dejo para navegar
        </pre>


        <a class="link-success" href="client/">IR A CLIENTE</a>
        <br />
        
        <br />
        
        <?php button(['href' => './', 'content' => 'PENDIENTE']); ?>

    </div>
<?php } ?>
<!-- ----------fin de contenido---------->

<?php include_once __DIR__ . '/components/template/layout.php'; ?>
<?php layout($content); ?>