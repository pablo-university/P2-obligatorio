<div class="mt-5 mb-5">
    <h3 class="p-3">Ingreso de productos</h3>

    <form action="./manage.php" class="row row-cols-sm-2">


        <div>
            <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                <option selected disabled>Seleciona una banda para el reloj</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
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
            <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                <option selected disabled>dESCRIPCION</option>
                <option value="1">One</option>
            </select>

            <!-- display_type -->
            <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                <option selected disabled>Tipo de display</option>
                <option value="1">One</option>
            </select>

            <!-- model -->
            <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                <option selected disabled>Modelo</option>
                <option value="1">One</option>
            </select>

            <!-- moment -->
            <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                <option selected disabled>Momento</option>
                <option value="1">One</option>
            </select>

            <!-- price -->
            <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                <option selected disabled>Precio</option>
                <option value="1">One</option>
            </select>

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
            <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                <option selected disabled>S</option>
                <option value="1">One</option>
            </select>

            <!-- submersible -->
            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">Sumergible</label>
            </div>

            <!-- title -->
            <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                <option selected disabled>Case</option>
                <option value="1">One</option>
            </select>

            <!-- user_type -->
            <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                <option selected disabled>Tipo de usuario</option>
                <option value="1">One</option>
            </select>

            <!-- weight -->
            <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                <option selected disabled>Case</option>
                <option value="1">One</option>
            </select>

            <!-- image -->
            <div class="mb-3">
                <label for="formFileSm" class="form-label">Small file input example</label>
                <input class="form-control form-control-md" id="formFileSm" type="file">
            </div>

            <div class="d-grid justify-content-end">
                <button type="submit" class="btn btn-primary">GUARDAR</button>
            </div>

        </div>


    </form>
</div>