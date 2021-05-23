<?php


/**
 * Agrega nuevo producto
 * 
 * agrega producto
 * luego product_color!
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

    function walker($msg = 'default message', $code = '')
    {
        header("Location: ./../constructor.php?msg=$msg&code=$code");
        exit();
    }

    // set product_color
    // ! esta funcion quedo en desuso quiza si armo lo de la relacion de los colores la pueda volver a utilizar
    public function set_product_color()
    {
        // si funciona puedo tomar mi variable global de objeto last_id_inserted
        $id_inserted = $this->conn->insert_id;

        // inserto la relacion por cada color que haya sido seleccionado
        foreach ($_REQUEST['color'] as $key => $value) {

            $query = "
            INSERT INTO product_color (id_product, id_color)
            VALUES ('$id_inserted', '$value');
            ";

            if (!$this->conn->query($query)) {
                return '>>error en set_product_band<br>';
            }
        }
        // retornar todo ok
        return '>>set_product_band correcta<br>';
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


            foreach ($_FILES['image']['tmp_name'] as $key => $value) {

                // target path
                $target_path = __DIR__ . '/../../assets/img/products/';

                $name = uniqid() . '.png';
                $target_path = $target_path . $name;

                // mover archivo a directorio
                if (!move_uploaded_file($value, $target_path)) {
                    return "Error al subir al guardar archivo<br>";
                }

                // cada que guarde inserto relacion
                $this->set_image($name);
            }

            // para debuguear
            return '>>imagenes subidas<br>';
        }
    }

    // set product
    public function set_product()
    {

        // evito que color sea vacio!
        if (empty($_REQUEST['color'])) {
            header("Location: ./../constructor.php?msg=no se asignaron colores, <a href='javascript:history.back()'>recuperar datos?</a>&code=404");
            // exit();
            return '';
            // estoy queriendo volver pero con un mensaje!
        }

        // si existen datos los setea y vuelve al constructor
        if (!empty($_REQUEST)) {


            $to_insert = [];
            $insert_value = [];

            // obtener key value
            foreach ($_REQUEST as $key => $value) {
                // evito set_product_band (se procesa luego) e upload_img
                // y chequeo que de no hacer nada con add_new_product
                if (!str_contains($key, 'color') and !str_contains($key, 'image')) {
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
                return 'error al guardar datos';
            } else {
                // obtengo ultimo _id en mi propiedad de objeto
                $this->last_id_inserted = $this->conn->insert_id;

                // seteo product_color
                $this->set_product_color();
                // guardo imagen y seteo la relación (bucle dentro de imagen)
                // agregame la iamgen si no está vacío
                if (!empty($_FILES['image'])) {
                    $this->upload_image();
                }


                // vuelvo al constructor
                header("Location: ./../constructor.php?msg=se agrego el producto");
                exit();
            }
        } // si tenia datos el request
    } // funcion agregar
}
