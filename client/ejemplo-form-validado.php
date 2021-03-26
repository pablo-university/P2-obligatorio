<form class="row g-3 needs-validation" novalidate>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Mi prueba validacion</label>
                <input type="number" class="form-control" id="validationCustom01" value="Mark" required>
                <div class="valid-feedback">
                    GOOD
                </div>
                <div class="invalid-feedback">
                    Nan prrix
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">ENVIAR</button>
            </div>
        </form>

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