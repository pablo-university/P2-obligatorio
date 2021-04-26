<div class="mt-5 mb-5">
    <h3 class="p-3">Ingreso de productos</h3>

    <form action="./manage.php" class="row row-cols-sm-2">


        <div>

            <!-- title -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInputx" placeholder="name@example.com">
                <label for="floatingInputx">Ingresa titulo de producto</label>
            </div>

            <!-- band -->
            <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                <option selected disabled>Seleciona una banda para el reloj</option>
                <option value="1">One</option>
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
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Stock</label>
                <input type="number" max='50' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Peso (gramos)</label>
                <input type="number" max='500' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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