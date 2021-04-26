<?php include_once __DIR__ . '/../../controllers/class_get_props.php'; ?>
<?php
$res_bands = $class_get_props->get_bands();
$res_brands = $class_get_props->get_brands();
$res_cases = $class_get_props->get_cases();
$res_colors = $class_get_props->get_colors();
$res_display_types = $class_get_props->get_display_types();
$res_moments = $class_get_props->get_moments();
$res_user_type = $class_get_props->get_user_type();

?>

<div class="mt-5 mb-5">
    <h3 class="p-3">Ingreso de productos</h3>

    <form action="./constructor.php" class="row row-cols-sm-2">


        <div>

            <!-- title -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInputx" placeholder="name@example.com">
                <label for="floatingInputx">Ingresa titulo de producto</label>
            </div>

            <!-- band -->
            <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                <option selected disabled>Seleciona una banda para el reloj</option>
                <?php while ($data = $res_bands->fetch_object()) { ?>
                    <option value="<?= $data->band ?>"><?= $data->band ?></option>
                <?php } ?>
            </select>

            <!-- brand -->
            <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                <option selected disabled>Marca</option>
                <option value="1">One</option>
            </select>

            <!-- case -->
            <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                <option selected disabled>Case</option>
                <option value="1">One</option>
            </select>

            <!-- color -->
            <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                <option selected disabled>Color</option>
                <option value="1">One</option>
            </select>

            <!-- description -->
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Descripción</label>
            </div>

            <!-- display_type -->
            <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                <option selected disabled>Tipo de display</option>
                <option value="1">One</option>
            </select>

            <!-- model -->
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInputx" max='9999' placeholder="name@example.com">
                <label for="floatingInputx">Modelo</label>
            </div>

            <!-- moment -->
            <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                <option selected disabled>Momento</option>
                <option value="1">One</option>
            </select>

            <!-- price -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInputx" placeholder="name@example.com">
                <label for="floatingInputx">Ingresa price de producto</label>
                <div id="emailHelp" class="form-text">decir algo sobre el precio</div>
            </div>

        </div>

        <div>
            <!-- BAND -->
            <!-- 
                deberias desplegar las bandas disponibles
                luego insertar el elemento, obtener su _id
                y con ello insertar en la tabla product_band
                la relacion con el id de product y el id de
                la banda seleccionada -->

            <!-- sale -->
            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">En sale</label>
            </div>

            <!-- shipping -->
            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">Envío gratis</label>
            </div>

            <!-- stock -->
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInputx" max='50' placeholder="name@example.com">
                <label for="floatingInputx">Stock (cantidad)</label>
            </div>

            <!-- submersible -->
            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">Sumergible</label>
            </div>


            <!-- user_type -->
            <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                <option selected disabled>Tipo de usuario</option>
                <option value="1">One</option>
            </select>

            <!-- weight -->
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInputx" max='500' placeholder="name@example.com">
                <label for="floatingInputx">Peso (gramos)</label>
            </div>


            <!-- image -->
            <div class="mb-3">
                <label for="formFileSm" class="form-label">Ingresa imagen</label>
                <input class="form-control form-control-md" id="formFileSm" type="file">
            </div>

            <div class="d-grid justify-content-end">
                <button type="submit" class="btn btn-primary">GUARDAR</button>
            </div>

        </div>


    </form>
</div>