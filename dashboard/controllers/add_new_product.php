<?php
include_once __DIR__ . '/../../connectors/connection.php';
// aqui en este php estaría agregando a la base de datos

echo '<pre>' . var_export($_REQUEST, true) . '</pre>';



/**
 * Agrega nuevo producto
 * 
 * agrega producto
 * luego producto relacion con banda
 * agrega imagen en servidor
 * agrega la imagen en sql
 */



class Add_new_product
{
    public $last_id_inserted = null;

    public function __construct(
        public $conn
    ) {
    }

    // set product band
    public function set_product_band()
    {
        // si funciona puedo tomar mi variable global de objeto last_id_inserted
        $id_inserted = $this->conn->insert_id;

        // cuando pueda tener multiples bandas deberia recorrer
        // el request[band] y obtener las bandas asociadas
        $query = "
        INSERT INTO product_band (id_product, id_band)
        VALUES ('$id_inserted', '$_REQUEST[band]');
        ";

        if (!$this->conn->query($query)) {
            return '>>error en set_product_band<br>';
        } else {
            return '>>set_product_band correcta<br>';
        }
    }

    public function set_image($url)
    {
        /*  realizar una inserción en la tabla de imágenes
        con el id de producto correspondiente */
        $query = "
        INSERT INTO images (url, id_product, alt, title)
        VALUES ('$url', '$this->last_id_inserted', 'empty', 'empty');
        ";
        if (!$this->conn->query($query)) {
            return ">>error en set_image::<br>";
        } else {
            return ">>set_image correcta::<br>";
        }
    }

    // upload image
    public function upload_image()
    {
        // si la imagen existe
        if (isset($_FILES['image'])) {

            // target path
            $target_path = __DIR__ . '/../../assets/img/products/';

            foreach ($_FILES['image']['tmp_name'] as $key => $value) {

                $name = uniqid() . '.jpg';
                $target_path = $target_path . $name;

                // mover archivo a directorio
                if (!move_uploaded_file($value, $target_path)) {
                    return "Error al subir al guardar archivo<br>";
                }

                // cada que guarde inserto relacion product_band
                $this->set_image($name);
            }

            // para debuguear
            return '>>imagenes subidas<br>';
        }
    }

    // set product
    public function set_product()
    {
        
        if (!empty($_REQUEST)) {

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

            // inserto datos
            if (!$this->conn->query($query)) { //$this->conn->query($query)
                return 'error al guardar';
            } else {
                // obtengo ultimo _id en mi propiedad de objeto
                $this->last_id_inserted = $this->conn->insert_id;

                // seteo la banda
                $this->set_product_band();
                // guardo imagen y seteo la relación (bucle dentro de imagen)
                $this->upload_image();

                return 'Datos guardados!';
            }
        }
    }
}

$prueba = new Add_new_product($conn);

echo $prueba->set_product();

?>