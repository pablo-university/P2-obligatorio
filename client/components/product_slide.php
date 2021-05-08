<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner">



        <?php
        include_once __DIR__ . '/../../connectors/connection.php';

        // TRAER IMAGEN COINCIDENTE CON ID
        // EN ESTA SECCION USE ORIENTACIÓN A OBJETOS PARA TRAER DATOS
        $_id = $_REQUEST['_id'];

        $query = "
            SELECT url
            FROM images
            WHERE id_product = $_id;
            ";

        // hago una consulta
        $res = $conn->query($query);

        // si la consulta no es vacia la recorro
        if ($res->num_rows < 1) {
            echo "no hay imagenes asociadas...";
        } else {
            $_HOST = LOCAL_HOST;
            $active = 'active';
            while ($data = $res->fetch_object()) {
                echo "<div class='carousel-item $active'>";
                echo "<img src=\"$_HOST/assets/img/products/$data->url\" class='d-block m-auto w-75' alt='alt'>";
                echo "</div>";
                $active = '';
            }
        }

        ?>


        <!-- INDICADOR DE CARRUSEL SI HAY TIEMPO LO HAGO -->
        <div class="carousel-indicators">
            <?php for ($i = 0; $i < $res->num_rows; $i++) { ?>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i ?>" class="<?= ($i < 1) ? 'active' : '' ?>" aria-current="true" aria-label="Slide <?= $i ?>"></button>
            <?php } ?>
        </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>