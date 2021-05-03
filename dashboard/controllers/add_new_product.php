<?php
// generar id
// https://www.w3schools.com/php/func_misc_uniqid.asp
// aqui en este php estaría agregando a la base de datos

echo '<pre>' . var_export($_FILES, true) . '</pre>';
echo '<pre>' . var_export($_FILES['image'], true) . '</pre>';

// ----------------


function upload_image(): void
{
    // si la imagen existe
    if (isset($_FILES['image'])) {

        $upload_control = true;
        $msg = '';

        // type control
        if (!($_FILES['image']['type'] == "image/jpeg")) {
            $msg = $msg . " Tu archivo tiene que ser jpg.<BR>";
            $upload_control = false;
        }

        // size control
        if ($_FILES['image']['size'] > 5242880) {
            $msg = $msg . "El archivo es mayor que 5mb<BR>";
            $upload_control = false;
        }

        // target path
        $target_path = __DIR__ . '/../../assets/img/products/test/';
        // echo $target_path;
        $target_path = $target_path . uniqid() . '.jpg';

        // check variable de control
        if ($upload_control) {

            if (move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
                echo "Ha sido subido satisfactoriamente";
            } else {
                echo "Error al subir el archivo";
            }
        } else {
            echo $msg;
        }
    }
}
// upload_image();
