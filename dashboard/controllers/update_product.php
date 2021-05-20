<?php
include_once __DIR__ . '/../../connectors/connection.php';
include_once __DIR__ . '/../../utils/constants.php';


// clases aqui lo que sea necesario para actualizar
// mi idea seria extender de la clase agregar y poder usar algunas cosas como guardar imagen por ej

echo '<pre>' . var_export($_REQUEST, true) . '</pre>';
class Update
{

    public function __construct(
        public $conn,
        public $update_at
    ) {
    }
    // crear funcion de errores aqui? al llamarla termina el script y envia un mensaje cn code
    function walker($msg = 'default message', $code = '')
    {
        header("Location: ./../constructor.php?msg=$msg&code=$code");
        exit();
    }

    function update_color()
    {
        /**  
         * eliminar colores existentes
         * agregar los nuevos
         **/

        // eliminar registros product_color
        $query_product_color = "
            DELETE
            FROM product_color
            WHERE product_color.id_product = $this->update_at
            ";
        $res = $this->conn->query($query_product_color);
        if (empty($res)) {
            $this->walker('error al borrar colores para actualizar', 404);
        }

        // inserto la relacion por cada color que haya sido seleccionado
        foreach ($_REQUEST['color'] as $key => $value) {

            $query = "
             INSERT INTO product_color (id_product, id_color)
             VALUES ('$this->update_at', '$value');
             ";

            if (!$this->conn->query($query)) {
                $this->walker('error al agregar colores para actualizar', 404);
            }
        }
    }

    public function set_image($url)
    {
        /*  realizar una inserción en la tabla de imágenes
        con el id de producto correspondiente */
        $query = "
        INSERT INTO images (url, id_product, alt, title)
        VALUES ('$url', '$this->update_at', 'empty', 'empty');
        ";
        if (!$this->conn->query($query)) {
            $this->walker('Error al relacionar imagen con el producto', 404);
        }
    }

    // upload image
    public function upload_image()
    {
        // si la imagen existe
        if (!empty($_FILES['image']['name'][0])) {


            foreach ($_FILES['image']['tmp_name'] as $key => $value) {

                // target path
                $target_path = __DIR__ . '/../../assets/img/products/';

                $name = uniqid() . '.png';
                $target_path = $target_path . $name;

                // mover archivo a directorio
                if (!move_uploaded_file($value, $target_path)) {
                    $this->walker('Error al subir el archivo', 404);
                }

                // cada que guarde inserto relacion
                $this->set_image($name);
            }
        }
    }

    function update_product()
    {
        // evito que color sea vacio!
        if (empty($_REQUEST['color'])) {
            $this->walker('debes asignar al menos un color a tu reloj', 404);
        }

        // confirmo tener un request
        if (!empty($_REQUEST)) {
            $update_value = [];

            // obtener key value
            foreach ($_REQUEST as $key => $value) {
                // evito set_product_band (se procesa luego)
                // y chequeo que de no hacer nada con add_new_product
                if (!str_contains($key, 'color') and !str_contains($key, 'image') and !str_contains($key, 'update_at')) {
                    // array_push($to_insert, 'products.' . $key);--
                    array_push($update_value, "P.$key = '$value'");
                }
            }

            // $to_insert = implode(', ', $to_insert);---
            $update_value = implode(' , ', $update_value);

            // create query
            $query = "
            UPDATE products P
            SET $update_value
            WHERE _id = $this->update_at
            ";

            echo "$query";

            // inserto datos
            if (!$this->conn->query($query)) { //!$this->conn->query($query)
                $this->walker('error al insertar los datos del producto', 404);
            } else {

                // seteo product_color
                $this->update_color();

                // guardo imagen y seteo la relación (bucle dentro de imagen)
                $this->upload_image();

                $this->walker('Datos actualizados!');
            }
        }
    }
}

// instancio con la conexión y mi update_at
$update = new Update($conn, $_REQUEST['update_at']);

// ejecuto mi instancia
$update->update_product();
// $update->upload_image();
