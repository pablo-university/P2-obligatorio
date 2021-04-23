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
                        <input class="form-check-input" type="checkbox" name='color[]' value="<?= $data->color ?>" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
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
                        <input class="form-check-input" type="checkbox" name='moment[]' value="<?= $data->moment ?>" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
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
                        <input class="form-check-input" type="checkbox" name='brand[]' value="<?= $data->brand ?>" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
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
                <input class="form-check-input" type="checkbox" name="shipping[]" value="1" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Envío
                </label>
            </div>
        </div>

        <div>
            <!-- Sale -->
            <h4>Sale</h4>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="shipping[]" value="1" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Sale
                </label>
            </div>
        </div>

        <div>
            <button class="btn btn-primary" type="submit">BUSCAR</button>
        </div>

    </form>


    <?php

    // OBTIENE Y CREA EL QUERY
    function shop_aside_filter($card_product, $conn): void
    {
        $query = [];
        /*
        recorro el request, que contiene arrays asociativos de names
        y por cada name recorro para obtener valores (name = value)
        y dejarlos en un array */
        foreach ($_REQUEST as $name => $arr) {
            foreach ($arr as $value) {
                array_push($query, "$name = '$value'");
            }
        }
        // por ultimo tomo el array query, uso implode y agrego el AND
        $query = implode(" OR ", $query);//cambie and por or -> imposible color = negro AND color = gris


        // COMPLETO MI QUERY
        $query = "
        SELECT P._id, I.url, P.title, P.price, P.sale
        FROM products AS P
        INNER JOIN images AS I
        ON P._id = I.id_product
        WHERE $query
        GROUP BY (P._id)
        ;
        ";

        $res = mysqli_query($conn, $query);


        // si la consulta no es vacia la recorro
        if ($res->num_rows < 1) {
            echo "<p>no hay productos para mostrar...<p/>";
        } else {
            while ($data = mysqli_fetch_object($res)) {

                card_product([
                    '_id' => $data->_id,
                    'img' => $data->url,
                    'title' => $data->title,
                    'price' => $data->price,
                    'sale' => $data->sale
                ]);
            }
        }
    }



    ?>
</aside>

<!-- basicamente con name='pepe[]' en varios checkbox obtengo como array ese pepe en el request -->