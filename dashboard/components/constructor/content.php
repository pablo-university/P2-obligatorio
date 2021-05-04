<?php include_once __DIR__ . '/../../controllers/class_get_props.php'; ?>
<?php
ini_set("default_charset", "UTF-8");
$res_bands = $class_get_props->get_prop('band', 'band');
$res_brands = $class_get_props->get_prop('brand', 'brand');
$res_cases = $class_get_props->get_prop('products', 'case');
$res_colors = $class_get_props->get_prop('color', 'color');
$res_display_types = $class_get_props->get_prop('display_type', 'display_type');
$res_moments = $class_get_props->get_prop('moment', 'moment');
$res_user_types = $class_get_props->get_prop('user_type', 'user_type');

?>

<div class="mt-5 mb-5">
    <h3 class="p-3">Ingreso de productos</h3>

    <form action="./constructor.php" enctype="multipart/form-data" method="POST" class="row row-cols-sm-2">


        <div>

            <!-- title -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="title" id="floatingInputx" placeholder="name@example.com" value="_prueba_title">
                <label for="floatingInputx">Ingresa titulo de producto</label>
            </div>

            <!-- band -->
            <select class="form-select form-select-md mb-3" name="band" aria-label=".form-select-lg example">
                <option selected disabled>Seleciona una banda para el reloj</option>
                <?php while ($data = $res_bands->fetch_object()) { ?>
                    <option value="<?= $data->_id ?>"><?= $data->band ?></option>
                <?php } ?>
            </select>

            <!-- para cuando lo haga con multiples bandas -->
            <!-- <?php while ($data = $res_bands->fetch_object()) { ?>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="band[]" value="<?= $data->_id ?>" id="<?= $data->band ?>">
                    <label class="form-check-label" for="<?= $data->band ?>">
                        <?= $data->band ?>
                    </label>
                </div>
            <?php } ?> -->

            <!-- brand -->
            <select class="form-select form-select-md mb-3" name="brand" aria-label=".form-select-lg example">
                <option selected disabled>Marca</option>
                <?php while ($data = $res_brands->fetch_object()) { ?>
                    <option value="<?= $data->brand ?>"><?= $data->brand ?></option>
                <?php } ?>
            </select>

            <!-- case -->
            <select class="form-select form-select-md mb-3" name="case" aria-label=".form-select-lg example">
                <option selected disabled>Case</option>
                <?php while ($data = $res_cases->fetch_object()) { ?>
                    <option value="<?= $data->case ?>"><?= $data->case ?></option>
                <?php } ?>
            </select>

            <!-- color -->
            <select class="form-select form-select-md mb-3" name="color" aria-label=".form-select-lg example">
                <option selected disabled>Color</option>
                <?php while ($data = $res_colors->fetch_object()) { ?>
                    <option value="<?= $data->color ?>"><?= $data->color ?></option>
                <?php } ?>
            </select>

            <!-- description -->
            <div class="form-floating mb-3">
                <textarea class="form-control" name='description' id="floatingTextarea2" placeholder="Leave a comment here" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Descripción</label>
            </div>

            <!-- display_type -->
            <select class="form-select form-select-md mb-3" name="display_type" aria-label=".form-select-lg example">
                <option selected disabled>Tipo de display</option>
                <?php while ($data = $res_display_types->fetch_object()) { ?>
                    <option value="<?= $data->display_type ?>"><?= $data->display_type ?></option>
                <?php } ?>
            </select>

            <!-- model -->
            <div class="form-floating mb-3">
                <input type="number" class="form-control" name="model" id="floatingInputx" max='9999' placeholder="name@example.com">
                <label for="floatingInputx">Número de modelo</label>
            </div>

            <!-- moment -->
            <select class="form-select form-select-md mb-3" name="moment" aria-label=".form-select-lg example">
                <option selected disabled>Momento</option>
                <?php while ($data = $res_moments->fetch_object()) { ?>
                    <option value="<?= $data->moment ?>"><?= $data->moment ?></option>
                <?php } ?>
            </select>

            <!-- price -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="price" id="floatingInputx" placeholder="name@example.com">
                <label for="floatingInputx">Ingresa price de producto</label>
                <div id="emailHelp" class="form-text">decir algo sobre el precio</div>
            </div>

        </div>

        <div>

            <!-- sale -->
            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" name="sale" value="1" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">En sale</label>
            </div>

            <!-- shipping -->
            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" name="shipping" value="1" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">Envío gratis</label>
            </div>

            <!-- stock -->
            <div class="form-floating mb-3">
                <input type="number" class="form-control" name="stock" id="floatingInputx" max='50' placeholder="name@example.com">
                <label for="floatingInputx">Stock (cantidad)</label>
            </div>

            <!-- submersible -->
            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" name="submersible" value="1" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">Sumergible</label>
            </div>


            <!-- user_type -->
            <select class="form-select form-select-md mb-3" name="user_type" aria-label=".form-select-lg example">
                <option selected disabled>Tipo de usuario</option>
                <?php while ($data = $res_user_types->fetch_object()) { ?>
                    <option value="<?= $data->user_type ?>"><?= $data->user_type ?></option>
                <?php } ?>

            </select>

            <!-- weight -->
            <div class="form-floating mb-3">
                <input type="number" class="form-control" name="weight" id="floatingInputx" max='500' placeholder="name@example.com">
                <label for="floatingInputx">Peso (gramos)</label>
            </div>


            <!-- image -->
            <div class="mb-3">
                <label for="formFileSm" class="form-label">Ingresa imagen</label>
                <input type="file" class="form-control form-control-md" name="image[]" multiple id="formFileSm">
            </div>


            <div class="d-grid justify-content-end">
                <button type="submit" class="btn btn-primary">GUARDAR</button>
            </div>

        </div>


    </form>
</div>

<?php include_once __DIR__ . '/../../controllers/add_new_product.php'; ?>