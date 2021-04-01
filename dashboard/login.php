<?php include_once __DIR__ . '/../components/template/layout.php'; ?>
<?php include_once __DIR__ . '/components/layout_dashboard.php'; ?>
<?php include_once __DIR__ . '/../utils/constants.php'; ?>

<?php $content = function (): void { ?>





    <div class="container-login container-fluid ">


        <div class="row row-cols-md-2 min-vh-100">

            <!-- ------------ -->
            <div class="bg-dark ">

            </div>
            <!-- ------------------------------ -->
            <div class="d-flex flex-column justify-content-center align-items-center">
                <figure class="figure">
                    <img src="<?php echo LOCAL_HOST; ?>/assets/img/client-carrusel-1.jpg" class="figure-img img-fluid rounded-circle" alt="...">
                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                </figure>

                <form action="./index.php" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="mail">
                        <div id="emailHelp" class="form-text">Ingresa tu email por favor</div>
                        <div class="invalid-feedback">mail incorrecto.</div>
                        <div class="valid-feedback">ok</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" required placeholder="contraseña">
                        <div id="exampleInputPassword1" class="form-text">Ingresa tu contraseña</div>
                        <div class="invalid-feedback">contraseña incorrecta o vacía</div>
                        <div class="valid-feedback">parece correcta</div>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required >
                        <label class="form-check-label" for="exampleCheck1">Check</label>
                        <div id="exampleCheck1" class="form-text">recordar datos</div>
                    </div>
                    <button type="submit" class="btn btn-primary">INGRESAR</button>
                </form>
            </div>
            <!-- ------------------------------ -->
            <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function() {
                    'use strict'

                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.querySelectorAll('.needs-validation')

                    // Loop over them and prevent submission
                    Array.prototype.slice.call(forms)
                        .forEach(function(form) {
                            form.addEventListener('submit', function(event) {
                                if (!form.checkValidity()) {
                                    event.preventDefault()
                                    event.stopPropagation()
                                }

                                form.classList.add('was-validated')
                            }, false)
                        })
                })()
            </script>


        </div>


    </div>







<?php } ?>
<!-- cierre de layout -->

<?php layout($content) ?>