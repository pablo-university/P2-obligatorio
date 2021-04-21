<?php include_once __DIR__ . '/../../components/template/layout.php'; ?>



<!-- NOTA -->
<!-- aqui estoy creando una segunda función de layout la cual
es mas global y acorde a lo que le pasemos, ella se encarga de
pasarselo a la función Layout comun. -->


<?php function layout_dashboard($args): void
{ ?>


<!-- me re costó encontrar que la función hija tenga alcance a esta variable, solucione con use -->
    <?php $content = function () use ($args) { ?>

        <div class="container-dashboard">

            <?php include_once __DIR__ . '/header.php'; ?>

            <div class="container-fluid">
                <div class="row">



                    <?php include_once __DIR__ . '/nav.php'; ?>

                    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                        <?php $args(); ?>
                    </main>



                </div>
            </div>


            <!-- iconos de este theme -->
            <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
            <!-- chart js -->
            <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
            <script src="charts.js"></script>
        </div>


    <?php } ?>
    <!-- cierre de layout -->

    <?php layout($content) ?>


<?php } ?>