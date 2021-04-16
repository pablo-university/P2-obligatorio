
<aside class="col-0 col-lg-4">
    <form action="" class="d-grid gap-3">

        <div>
            <!-- Color -->
            <h4>Color</h4>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name='color[]' value="bage" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    bage
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name='color[]' value="negro" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    negro
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name='color[]' value="dorado" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    dorado
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name='color[]' value="plateado" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    plateado
                </label>
            </div>
        </div>


        <div>
            <!-- Ocación -->
            <h4>Ocación</h4>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name='moment[]' value="clásico" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    clásico
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name='moment[]' value="fashion" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    fashion
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name='moment[]' value="deportivo" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    deportivo
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name='moment[]' value="smart" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    smart
                </label>
            </div>
        </div>

        <div>
            <!-- Marca -->
            <h4>Marca</h4>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name='brand[]' value="kaunas" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                kaunas
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name='brand[]' value="casio" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                casio
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name='brand[]' value="addidas" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                addidas
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name='brand[]' value="lotus" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                lotus
                </label>
            </div>
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
        $query = implode(" AND ", $query);


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