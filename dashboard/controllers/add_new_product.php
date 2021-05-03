<?php
include_once __DIR__ . '/../../connectors/connection.php';
// aqui en este php estaría agregando a la base de datos

echo '<pre>' . var_export($_REQUEST, true) . '</pre>';

// set product band
function set_product_band($conn, $valor)
{
    $query = "
    INSERT INTO product_band (id_product, id_band)
    VALUES ('$valor', '$_REQUEST[band]');
    ";

    if (!$conn->query($query)) {
        return ">>error en set_product_band::<br>$query";
    } else {
        return ">>set_product_band correcta::<br>$query";
    }
}

function set_image($conn, $_id_product)  {
   /*  realizar una inserción en la tabla de imágenes
    con el id de producto correspondiente */
}

// set product
function set_product($conn)
{
    if (!isset($_REQUEST)) {
        return 'request isn´t setted';
    } else {
        $to_insert = [];
        $insert_value = [];

        // obtener key value
        foreach ($_REQUEST as $key => $value) {
            //no proceso esto ya que lo hago en set_product_band
            if (!str_contains($key, 'band')) {
                array_push($to_insert, 'products.' . $key);
                array_push($insert_value, "'$value'");
            }
        }

        $to_insert = implode(', ', $to_insert);
        $insert_value = implode(', ', $insert_value);

        // create query
        $query = "
        INSERT INTO products ($to_insert)
        VALUES ($insert_value);
        ";

        echo "Query:: $query<br>";

        // inserto datos
        if (!$conn->query($query)) {//$conn->query($query)
            return '>>error en la query';
        } else {
            // obtengo ultimo _id y lo paso a set_product_band
            echo set_product_band($conn, $conn->insert_id);
            return '>>query correcta, datos ingresados!';
        }
    }
}
// echo set_product($conn);

// upload image
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

// echo upload_image();
