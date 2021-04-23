<?php include_once __DIR__ . '/../../connectors/connection.php'; ?>


<aside class="col-0 col-lg-4">
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

        ?>

        <!-- color -->
        <div>
            <h4>Color</h4>
            <?php if ($res_color->num_rows < 1) { ?>
                <?php echo "no result"; ?>
            <?php } else { ?>
                <?php while ($data = mysqli_fetch_object($res_color)) : ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name='color[]' value="<?= $data->color ?>" id="<?= $data->color ?>">
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
                        <input class="form-check-input" type="checkbox" name='moment[]' value="<?= $data->moment ?>" id="<?= $data->moment ?>">
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
                        <input class="form-check-input" type="checkbox" name='brand[]' value="<?= $data->brand ?>" id="<?= $data->brand ?>">
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
                <input class="form-check-input" type="checkbox" name="shipping[]" value="1" id="shipping">
                <label class="form-check-label" for="shipping">
                    Envío
                </label>
            </div>
        </div>

        <div>
            <!-- Sale -->
            <h4>Sale</h4>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="sale[]" value="1" id="sale">
                <label class="form-check-label" for="sale">
                    Sale
                </label>
            </div>
        </div>

        <div>
            <button class="btn btn-primary" type="submit">BUSCAR</button>
        </div>

    </form>

    <script>
        let watchShopDataLocal = localStorage.getItem('watchShopDataLocal');
        const inputs = document.querySelectorAll('input[type*="checkbox"]');

        // setear si encontro algo
        if (watchShopDataLocal) {
            const arrayFromLocal = JSON.parse(watchShopDataLocal)
            
            arrayFromLocal.forEach(function(value) {
                document.querySelector(`input[value*="${value}"]`).checked = true;
            });
        }

        // EVENTO
        inputs.forEach((elem) => {

            // EVENTO
            elem.addEventListener('click', function() {

                // traigo nuevamente datos locales
                watchShopDataLocal = localStorage.getItem('watchShopDataLocal');

                // si local existe
                if (watchShopDataLocal) {

                    // leo el JSON le agrego cosas
                    const data = JSON.parse(watchShopDataLocal);
                    console.log('datos traidos desde local ', data)

                    // lo vuelvo a guardar
                    const valor = this.getAttribute("value");

                    // si ya esta inlcuido no lo incluyas
                    if (!data.includes(valor)) {
                        const newData = [...data, valor];
                        localStorage.setItem('watchShopDataLocal', JSON.stringify(newData))
                    }

                } else {
                    // si no existe seteo por primera vez
                    const data = [this.getAttribute("value")];
                    localStorage.setItem('watchShopDataLocal', JSON.stringify(data))
                }

            })
        });
    </script>

</aside>

<!-- basicamente con name='pepe[]' en varios checkbox obtengo como array ese pepe en el request -->