<?php include_once __DIR__ . '/../../connectors/connection.php'; ?>


<!-- boton para ocultar aside cuando está en mobil -->
<button class="btn btn-primary d-sm-none w-75 my-3 m-auto" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-aside" aria-expanded="false" aria-controls="collapseExample">
    Mostrar filtros
</button>


<aside class="col-0 col-lg-4 py-3 collapse d-md-block" id="collapse-aside">
    <form action="" class="d-grid gap-3">


        <?php
        // GET PROPERTY FOR ASIDE PANEL
        $query_color = "
            SELECT DISTINCT * FROM color
            ";
        $query_moment = "
            SELECT DISTINCT * FROM moment
            ";
        $query_brand = "
            SELECT DISTINCT * FROM brand
            ";

        $res_color = $conn->query($query_color);
        $res_moment = $conn->query($query_moment);
        $res_brand = $conn->query($query_brand);

        // evalúa si el valor actual del recorrido está en la query, si está retorna checked para asignar al input
        $is_checked = fn ($key, $value) => (isset($_REQUEST[$key])) ?
            ((in_array($value, $_REQUEST[$key])) ? 'checked' : '') :
            '';

        /* // asignación de colores
        $array_colors = [
            '#ffe1bb',
            'black',
            '#fff80d',
            '#d7d7d7',

            '#86bcff',
            '#f1b55c',
            '#fff700',
        ]; */

        ?>

        <!-- color -->
        <div>
            <h4>Color</h4>
            <?php if ($res_color->num_rows < 1) { ?>
                <?php echo "no result"; ?>
            <?php } else { ?>
                <?php while ($data = mysqli_fetch_object($res_color)) : ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name='id_color[]' value="<?= $data->_id ?>" id="<?= $data->color ?>" <?= $is_checked('id_color', $data->_id); ?> style="background-color:<?= $data->code ?>;">
                        <label class="form-check-label" for="<?= $data->color ?>">
                            <?= $data->color ?>

                        </label>
                    </div>
                <?php endwhile; ?>
            <?php } ?>
        </div>

        <!-- Momento -->
        <div>
            <h4>Momento</h4>
            <?php if ($res_color->num_rows < 1) { ?>
                <?php echo "no result"; ?>
            <?php } else { ?>
                <?php while ($data = mysqli_fetch_object($res_moment)) : ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name='moment[]' value="<?= $data->moment ?>" id="<?= $data->moment ?>" <?= $is_checked('moment', $data->moment); ?>>
                        <label class="form-check-label" for="<?= $data->moment ?>">
                            <?= $data->moment ?>
                        </label>
                    </div>
                <?php endwhile; ?>
            <?php } ?>
        </div>

        <!-- Marca -->
        <div>
            <h4>Marca</h4>
            <?php if ($res_brand->num_rows < 1) { ?>
                <?php echo "no result"; ?>
            <?php } else { ?>
                <?php while ($data = mysqli_fetch_object($res_brand)) : ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name='brand[]' value="<?= $data->brand ?>" id="<?= $data->brand ?>" <?= $is_checked('brand', $data->brand); ?>>
                        <label class="form-check-label" for="<?= $data->brand ?>">
                            <?= $data->brand ?>
                        </label>
                    </div>
                <?php endwhile; ?>
            <?php } ?>
        </div>


        <div>
            <!-- Envío -->
            <h4>Envío</h4>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="shipping[]" value="1" id="shipping" <?= $is_checked('shipping', 1); ?>>
                <label class="form-check-label" for="shipping">
                    Gratis!
                </label>
            </div>
        </div>

        <div>
            <!-- Sale -->
            <h4>Sale</h4>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="sale[]" value="1" id="sale" <?= $is_checked('sale', 1); ?>>
                <label class="form-check-label" for="sale">
                    En sale
                </label>
            </div>
        </div>


        <div>
            <button class="btn btn-outline-primary" type="submit">BUSCAR</button>
        </div>

    </form>

</aside>

<!-- basicamente con name='pepe[]' en varios checkbox obtengo como array ese pepe en el request -->