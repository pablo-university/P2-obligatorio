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
    protected function set_product_band()
    {
        // si funciona puedo tomar mi variable global de objeto last_id_inserted
        $id_inserted = $this->conn->insert_id;

        $query = "
        INSERT INTO product_band (id_product, id_band)
        VALUES ('$id_inserted', '$_REQUEST[band]');
        ";

        if (!$this->conn->query($query)) {
            return ">>error en set_product_band::<br>$query";
        } else {
            return ">>set_product_band correcta::<br>$query";
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
            return ">>error en set_image::<br>$query";
        } else {
            return ">>set_image correcta::<br>$query";
        }
    }

    // upload image
    public function upload_image()
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

                    $name = uniqid() . '.jpg';
                    $target_path = $target_path . $name;

                    // mover archivo a directorio
                    if (!move_uploaded_file($value, $target_path)) {
                        return "Error al subir al guardar archivo<br>";
                    }

                    // cada que guarde inserto en sql
                    $this->set_image($name);
                }

                return ">>upload_image correcta<br>";
            } else {
                return $msg;
            }
        }
    }

    // set product
    public function set_product()
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
            if (!$this->conn->query($query)) { //$this->conn->query($query)
                return '>>error en la query';
            } else {
                // AL INSERTAR PRODUCTO SE DESPRENDEN LAS DEMAS

                // obtengo ultimo _id y lo paso a set_product_band
                $this->last_id_inserted = $this->conn->insert_id;

                echo $this->set_product_band();
                // aqui ejecutar guardado de imagen
                echo $this->upload_image();

                return '>>query correcta, datos ingresados!';
            }
        }
    }
}


$prueba = new Add_new_product($conn);
echo $prueba->set_product();
