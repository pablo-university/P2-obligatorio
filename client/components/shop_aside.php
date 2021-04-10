<aside class="col-0 col-lg-4">
    <form action="" class="d-grid gap-3">

        <div>
            <!-- Color -->
            <h4>Color</h4>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name='color[]' value="color1" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Color 1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name='color[]' value="color2"  id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Color 2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name='color[]' value="color3" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Color 3
                </label>
            </div>
        </div>

        <div>
            <!-- Ocación -->
            <h4>Ocación</h4>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Ocación x
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Ocación x
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Ocación x
                </label>
            </div>
        </div>

        <div>
            <!-- Marca -->
            <h4>Marca</h4>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Marca x
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Marca x
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Marca x
                </label>
            </div>
        </div>

        <div>
            <!-- Envío -->
            <h4>Envío</h4>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Envío
                </label>
            </div>
        </div>

        <div>
            <!-- Sale -->
            <h4>Sale</h4>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Sale
                </label>
            </div>
        </div>

        <div>
            <button class="btn btn-primary" type="submit">BUSCAR</button>
        </div>

    </form>


    <p>probando obtener</p>
    <?php
    $res = $_REQUEST;
    echo '<pre>' . var_export($res['color'], true) . '</pre>';

    ?>
</aside>

<!-- basicamente con name='pepe[]' en varios checkbox obtengo como array ese pepe en el request -->