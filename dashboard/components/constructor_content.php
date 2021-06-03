<?php include_once __DIR__ . '/../controllers/get_props.php'; ?>
<?php include_once __DIR__ . '/../../utils/constants.php'; ?>

<!-- este controlador trae las propiedades y prepara para actualizar -->
<?php include_once __DIR__ . '/constructor_get_props.php'; ?>

<!-- IMPRIMO EL REQUEST QUE ESTA LLEGANDO -->
<!-- <?php //echo '<pre>' . var_export($_REQUEST, true) . '</pre>'; ?> -->

<!-- MUESTRO MENSAJES -->
<?php include_once __DIR__ . '/msg.php'; ?>

<!-- constructor content -->
<div class="">
    <h4 class="pb-3">Ingreso de productos</h4>

    <?php
    // controlo a donde se envia el formulario
    // cuando es agregar, las funciones de agregar actúan, y sino lo contrario
    $url = LOCAL_HOST . '/dashboard/controllers/';
    $url .= (!empty($_REQUEST['update_at'])) ? "update_product.php" : "add_new_product.php";
    ?>
    <form action="<?= $url ?>" enctype="multipart/form-data" method="POST" class="row row-cols-lg-3 needs-validation" novalidate>

        <!-- column 1 -->
        <div>
            <!-- title -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="title" id="floatingInputx" value="<?= (!empty($res_product)) ? $res_product->title : '_prueba_' ?>" placeholder="#" required>
                <label for="floatingInputx">Titulo de producto</label>
                <div class="invalid-feedback">
                    Ingresa un titulo de producto por favor
                </div>
            </div>

            <!-- band -->
            <div class="form-floating mb-3">
                <select class="form-select form-select-md mb-3" id="band" name="band" aria-label=".form-select-lg example">
                    <?php while ($data = $res_bands->fetch_object()) { ?>

                        <?php $is_selected = !empty($res_product) ?  ($data->band == $res_product->band ? 'selected' : '') : ''; ?>
                        <option <?= $is_selected ?> value="<?= $data->band ?>"><?= $data->band ?></option>

                    <?php } ?>
                </select>
                <label for="band">Banda</label>
            </div>

            <!-- brand -->
            <div class="form-floating mb-3">
                <select class="form-select form-select-md mb-3" id="brand" name="brand" aria-label=".form-select-lg example">
                    <?php while ($data = $res_brands->fetch_object()) { ?>

                        <?php $is_selected = !empty($res_product) ?  ($data->brand == $res_product->brand ? 'selected' : '') : ''; ?>
                        <option <?= $is_selected ?> value="<?= $data->brand ?>"><?= $data->brand ?></option>
                    <?php } ?>

                </select>
                <label for="brand">Marca</label>
            </div>

            <!-- case -->
            <div class="form-floating mb-3">
                <select class="form-select form-select-md mb-3" id="case" name="case" aria-label=".form-select-lg example">
                    <?php while ($data = $res_cases->fetch_object()) { ?>

                        <?php $is_selected = !empty($res_product) ?  ($data->case == $res_product->case ? 'selected' : '') : ''; ?>
                        <option <?= $is_selected ?> value="<?= $data->case ?>"><?= $data->case ?></option>

                    <?php } ?>
                </select>
                <label for="case">Case</label>
            </div>


            <!-- color -->
            <div class="border pt-3 ps-3 mb-3">
                <label for="" class="form-label">Escoge un color</label>
                <div class="row row-cols-2 px-3 py-3">
                    <?php while ($data = $res_colors->fetch_object()) { ?>

                        <div class="form-check">
                            <!-- si estoy actualizando miro si el color está chequeado -->
                            <?php $is_checked = color_is_checked($res_product_color, $data->color); ?>
                            <input class="form-check-input" type="checkbox" name="color[]" value="<?= $data->_id ?>" <?= $is_checked ?> id="<?= $data->color ?>">
                            <label class="form-check-label" for="<?= $data->color ?>">
                                <?= $data->color ?>
                            </label>
                        </div>

                    <?php } ?>
                </div>
            </div>

            <!-- description -->
            <div class="form-floating mb-3">
                <textarea class="form-control" name='description' id="floatingTextarea2" style="height: 9.5rem" placeholder="#" required><?= (!empty($res_product)) ? $res_product->description : '' ?></textarea>
                <label for="floatingTextarea2">Descripcion</label>
                <div class="invalid-feedback">Ingresa una descripcion de producto por favor</div>
            </div>


        </div>

        <!-- column 2 -->
        <div>

            <!-- display_type -->
            <div class="form-floating mb-3">
                <select class="form-select form-select-md mb-3" name="display_type" id="display_type" aria-label=".form-select-lg example">
                    <?php while ($data = $res_display_types->fetch_object()) { ?>

                        <?php $is_selected = !empty($res_product) ?  ($data->display_type == $res_product->display_type ? 'selected' : '') : ''; ?>
                        <option <?= $is_selected ?> value="<?= $data->display_type ?>"><?= $data->display_type ?></option>

                    <?php } ?>
                </select>
                <label for="display_type">Tipo de display</label>
            </div>

            <!-- moment -->
            <div class="form-floating mb-3">
                <select class="form-select form-select-md mb-3" name="moment" id="moment" aria-label=".form-select-lg example">
                    <?php while ($data = $res_moments->fetch_object()) { ?>

                        <?php $is_selected = !empty($res_product) ?  ($data->moment == $res_product->moment ? 'selected' : '') : ''; ?>
                        <option <?= $is_selected ?> value="<?= $data->moment ?>"><?= $data->moment ?></option>

                    <?php } ?>
                </select>
                <label for="moment">Momento</label>
            </div>

            <!-- model -->
            <div class="form-floating mb-3">
                <input type="number" class="form-control" name="model" id="floatingInputx" max='999999999' value="<?= (!empty($res_product)) ? $res_product->model : '000' ?>" placeholder="#" required>
                <label for="floatingInputx">Número de modelo</label>
                <div class="invalid-feedback">Ingresa número de modelo inferior a 999999999</div>
            </div>

            <!-- price -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="price" id="floatingInputx" value="<?= (!empty($res_product)) ? $res_product->price : '000' ?>" placeholder="#" required>
                <label for="floatingInputx">Precio de producto</label>
                <div class="invalid-feedback">Ingresa el precio</div>
            </div>

            <!-- stock -->
            <div class="form-floating mb-3">
                <input type="number" class="form-control" name="stock" id="floatingInputx" max='50' value="<?= (!empty($res_product)) ? $res_product->stock : '000' ?>" placeholder="#" required>
                <label for="floatingInputx">Stock (cantidad)</label>
                <div class="invalid-feedback">Ingresa un stock inferior a 80</div>
            </div>


            <!-- weight -->
            <div class="form-floating mb-3">
                <input type="number" class="form-control" name="weight" id="floatingInputx" max='500' value="<?= (!empty($res_product)) ? $res_product->weight : '000' ?>" placeholder="#" required>
                <label for="floatingInputx">Peso (gramos)</label>
                <div class="invalid-feedback">Ingresa el peso menor a 500</div>
            </div>

            <!-- sale -->
            <div class="form-floating mb-3">
                <select class="form-select form-select-md mb-3" id="sale" name="sale">
                    <option selected value="0">no</option>
                    <option <?= (!empty($res_product)) ? ($res_product->sale ? 'selected' : '') : '' ?> value="1">si</option>
                </select>
                <label for="sale">Sale</label>
            </div>

            <!-- shipping -->
            <div class="form-floating mb-3">
                <select class="form-select form-select-md mb-3" id="shipping" name="shipping">
                    <option selected value="0">no</option>
                    <option <?= (!empty($res_product)) ? ($res_product->shipping ? 'selected' : '') : '' ?> value="1">si</option>
                </select>
                <label for="shipping">Envío</label>
            </div>

            <!-- submersible -->
            <div class="form-floating mb-3">
                <select class="form-select form-select-md mb-3" id="submersible" name="submersible">
                    <option selected value="0">no</option>
                    <option <?= (!empty($res_product)) ? ($res_product->submersible ? 'selected' : '') : '' ?> value="1">si</option>
                </select>
                <label for="submersible">Sumergible</label>
            </div>

        </div>

        <!-- column 3 -->
        <div>
            <!-- user_type -->
            <div class="form-floating mb-3">
                <select class="form-select form-select-md mb-3" name="user_type" id="user_type" aria-label=".form-select-lg example">
                    <?php while ($data = $res_user_types->fetch_object()) { ?>

                        <?php $is_selected = !empty($res_product) ?  ($data->user_type == $res_product->user_type ? 'selected' : '') : ''; ?>
                        <option <?= $is_selected ?> value="<?= $data->user_type ?>"><?= $data->user_type ?></option>

                    <?php } ?>

                </select>
                <label for="user_type">Tipo de usuario</label>
            </div>

            <!-- image -->
            <div class="mb-3">
                <label for="formFileSm" class="form-label">Ingresa imagen</label>
                <input type="file" class="form-control form-control-md" name="image[]" accept="image/*" multiple id="formFileSm">
            </div>

            <!-- si estoy actualizando chequear que vengan imagenes en la consulta -->
            <?php if (!empty($res_product) and !empty($res_product->url)) { ?>
                <div class="mb-3 row-cols-2 row row-cols-xl-3 g-3">

                    <?php foreach ($res_product_image as $key => $value) { ?>
                        <div class="position-relative">

                            <a href="./controllers/update_product.php?update_at=<?= $id_update_at ?>&delete_image=<?= $value['_id'] ?>" class="text-decoration-none text-secondary position-absolute" title="eliminar imagen"><i class="bi bi-trash border bg-light rounded"></i></a>

                            <?php if (!empty($value['url'])) {
                                $HOST = LOCAL_HOST;
                                $img = $value['url'];
                                echo "<img class='w-100' src=\"{$HOST}assets/img/products/{$img} \" >";
                            } ?>

                        </div>
                    <?php  } ?>

                </div>
            <?php  } ?>
            <!-- ----------------------------- -->

            <!-- CAMPO PARA CUANDO EL update_at ESTÁ SETEADO -->
            <?php if ($id_update_at) { ?>
                <input type="hidden" name="update_at" value="<?= $id_update_at ?>">
            <?php } ?>
            <!-- ------------------------------------------- -->



            <div class="d-grid justify-content-end">
                <button type="submit" class="btn btn-primary">
                    <?= (!empty($_REQUEST['update_at'])) ? 'ACTUALIZAR' : 'AGREGAR'; ?>
                </button>
            </div>
        </div>



    </form>
</div>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // valida check box
        function validaCheckBox(event) {
            // removeAttribute('checked','');
            const colorsChecked = document.querySelectorAll('input[name^=color]:checked');
            const colors = document.querySelectorAll('input[name^=color]');
            console.log('valor respuesta: ', colorsChecked.length)
            if (!colorsChecked.length) {
                colors.forEach((elem) => {
                    elem.setAttribute('required', '');
                    console.log('tiene required?:::', elem.hasAttribute('required'))
                });
                console.log('asigno required')
            } else {
                colors.forEach((elem) => {
                    elem.removeAttribute('required', '');
                });
                console.log('quito')
            }

        }

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    validaCheckBox(event);
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()

                        // esto estaba fuera del if, lo saque
                        form.classList.add('was-validated')
                    }

                }, false)
            })
    })()
</script>