<?php
// generar id
// https://www.w3schools.com/php/func_misc_uniqid.asp
// aqui en este php estaría agregando a la base de datos

echo '<pre>' . var_export($_FILES['image'], true) . '</pre>';

// ----------------


function upload_image()
{
    // si la imagen existe
    if (isset($_FILES['image'])) {

        $upload_control = true;
        $msg = 'todo ok';


        // type control
        foreach ($_FILES['image']['type'] as $key => $value) {
            if (!($value == "image/jpeg")) {
                $msg = "Tus archivos tiene que ser jpg.<BR>";
                $upload_control = false;
            }
        }

        // size control
        foreach ($_FILES['image']['size'] as $key => $value) {
            if (($value > 5242880)) {
                $msg = $msg . "Un archivo es mayor que 5mb<BR>";
                $upload_control = false;
            }
        }

        // target path
        $target_path = __DIR__ . '/../../assets/img/products/test/';
        // echo $target_path;
        

        // check variable de control
        if ($upload_control) {

            foreach ($_FILES['image']['tmp_name'] as $key => $value) {

                $target_path = $target_path . uniqid() . '.jpg';
                
            
                if (!move_uploaded_file($value, $target_path)) {
                    return "Error al subir el archivo<br>";
                }

            }

            return "Ha sido subido satisfactoriamente<br>";
        } else {
            return $msg;
        }
    }
}

echo upload_image();
