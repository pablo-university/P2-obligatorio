<?php include_once __DIR__ . '/../components/template/index.php'; ?>



<?php function content()
{ ?>
    <div class='container-client'>
        <?php include_once __DIR__ . '/components/header.php'; ?>

        <section class='container py-5'>

            <!-- titulo -->
            <h3>Contacto</h3>
            <p class='lead mb-5'>Todos los campos son requeridos!</p>

            <div class="row row-cols-md-2 g-4">
                <!-- contenedor del form -->
                <div>
                    <form class="row row-cols-xl-2 g-3 needs-validation" action="./contact.php" novalidate>
                        <!-- campo nombre -->
                        <div class="">
                            <label for="validationCustom01" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="validationCustom01" name="name" value="" placeholder="nombre" required>
                            <div class="valid-feedback">
                                GOOD
                            </div>
                            <div class="invalid-feedback">
                                el nombre es requerido
                            </div>
                        </div>
                        <!-- email -->
                        <div class="">
                            <label for="inputEmail4" class="form-label">Mail</label>
                            <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="email" required>
                            <div class="invalid-feedback">
                                debe ser de tipo ejemplo@dominio.com
                            </div>
                        </div>
                        <!-- mensaje -->
                        <div class="w-100">
                            <label for="validationTextarea" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="validationTextarea" name="msg" placeholder="Ingresa tu mensaje" required></textarea>
                            <div class="invalid-feedback">
                                Ingresa tu mensaje es requerido
                            </div>
                        </div>
                        <!-- BOTON ENVIAR -->
                        <div class="w-100">
                            <button class="btn btn-outline-primary" type="submit">ENVIAR</button>
                        </div>
                    </form>
                </div>

                <!-- contenedor del mapa -->
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.8287618520085!2d-56.70889118423732!3d-34.58319916392081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a1905ac4fa95d3%3A0x4b8e34a9c668bce5!2sDr%20M%C3%A1ximo%20Haro%20414-650%2C%20Puntas%20de%20Valdez%2C%20Departamento%20de%20San%20Jos%C3%A9!5e0!3m2!1ses-419!2suy!4v1616769894346!5m2!1ses-419!2suy" width="100%" height="450" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>

        </section>

        <?php

        if (!empty($_REQUEST)) {
            // mail a donde se envia, podria ser mi servidor
            $destinatario = "pablo@gmail.com";
            $asunto = "este es el asunto del mensaje!";

            if (!isset($_REQUEST['name']) || !isset($_REQUEST['msg'])) {
                return null;
            }
            $mensaje = "
            nombre: $_REQUEST[name] \r\n
            mensaje: $_REQUEST[msg] \r\n
            ";

            // le decimos al mail quien mando para poder responderle
            $cabecera = "From:$_REQUEST[msg]";
            /*// Cabecera que especifica que es un HMTL
            $cabeceras  = "MIME-Version: 1.0" . "\r\n";
            $cabeceras .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
            
            // Cabeceras adicionales
            $cabeceras .= "From: $mail". "\r\n";
            $cabeceras .= "Cc: otromail@example.com" . "\r\n";
            $cabeceras .= "Bcc: copiaoculta@example.com" . "\r\n"; */

            $enviado = mail($destinatario, $asunto, $mensaje, $cabecera);

            if ($enviado) {
                echo "mensaje enviado";
            } else {
                echo "mensaje no enviado";
            }
        }


        ?>


        <!-- validador bootstrap -->
        <script>
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

        <?php include_once __DIR__ . '/components/footer.php'; ?>

        <!-- cierre de container-client -->
    </div>
<?php } ?>
<?php layout("content") ?>