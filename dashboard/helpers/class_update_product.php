<?php 
include_once __DIR__.'/traits.php';
class Update
{

    public function __construct(
        public $conn,
        public $update_at
    ) {
    }

    use trait_walker; //por actualizar aun esta clase usa el walker viejo...
    use trait_check_image_valide;

    // walker es mi funcion mensajera
    /* function walker($msg = 'default message', $code = '', $optional_query = '')
    {
        header("Location: ./../constructor.php?msg=$msg&code=$code&$optional_query");
        exit();
    } */

    function update_color()
    {

        // eliminar registros product_color
        $query_product_color = "
            DELETE
            FROM product_color
            WHERE product_color.id_product = $this->update_at
            ";
        $res = $this->conn->query($query_product_color);
        if (empty($res)) {
            $this->walker([
                'dir' => 'dashboard/constructor.php', 
                'msg' => 'error al borrar colores para actualizar', 
                'code' => 404, 
                'optional_query' => null
                ]);
        }

        // inserto la relacion por cada color que haya sido seleccionado
        foreach ($_REQUEST['color'] as $key => $value) {

            $query = "
             INSERT INTO product_color (id_product, id_color)
             VALUES ('$this->update_at', '$value');
             ";

            if (!$this->conn->query($query)) {
                $this->walker([
                    'dir' => 'dashboard/constructor.php', 
                    'msg' => 'error al agregar colores para actualizar', 
                    'code' => 404, 
                    'optional_query' => null
                    ]);
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
            $this->walker([
                'dir' => 'dashboard/constructor.php', 
                'msg' => 'Error al relacionar imagen con el producto', 
                'code' => 404, 
                'optional_query' => null
                ]);
        }
    }

    // upload image
    public function upload_image()
    {
        
        // si la imagen existe
        if (!empty($_FILES['image']['name'][0])) {
            
            $this->check_image_valide("update_at=$this->update_at");// valida imagen

            foreach ($_FILES['image']['tmp_name'] as $key => $value) {

                // target path
                $target_path = __DIR__ . '/../../assets/img/products/';

                $name = uniqid() . '.png';
                $target_path = $target_path . $name;

                // mover archivo a directorio
                if (!move_uploaded_file($value, $target_path)) {
                    $this->walker([
                        'dir' => 'dashboard/constructor.php', 
                        'msg' => 'Error al subir el archivo', 
                        'code' => 404, 
                        'optional_query' => null
                        ]);
                }

                // cada que guarde inserto relacion
                $this->set_image($name);
            }
        }
    }

    function delete_image()
    {
        $delete_image = $_REQUEST['delete_image'];

        // eliminar registro fisico de la imagen
        $query_delete_images = "
        SELECT *
        FROM images I
        WHERE I.id_product = $this->update_at AND I._id = $delete_image
        ";

        // borrar imagenes de directorio
        $images_for_delete = $this->conn->query($query_delete_images);
        $data = $images_for_delete->fetch_object();

        $res = unlink(__DIR__ . '/../../assets/img/products/' . $data->url);

        if (!$res) {
            $this->walker([
                    'dir' => 'dashboard/constructor.php', 
                    'msg' => "Error al eliminar la imagen del directorio: <br> __DIR__ . '/../../assets/img/products/' . $data->url", 
                    'code' => 404, 
                    'optional_query' => null
                    ]);
        }
        // ---------------------------------

        // eliminar registro images
        $query_images = "
            DELETE
            FROM images
            WHERE images._id = $delete_image
            ";

        $res = $this->conn->query($query_images);

        if (!$res) {
            $this->walker([
                'dir' => 'dashboard/constructor.php', 
                'msg' => 'error al eliminar la relación de imagen', 
                'code' => 404, 
                'optional_query' => null
                ]);
        }
        // ------------------

    }

    function update_product()
    {
        // estoy queriendo eliminar imagen?
        if (!empty($_REQUEST['delete_image'])) {
            $this->delete_image();
            // |||||||||||| TRABAJANDO AQUIIIIIII ||||||||||||||||||||||
            $this->walker([
                'dir' => 'dashboard/constructor.php', 
                'msg' => 'imagen borrada correctamente', 
                'code' => 200, 
                'optional_query' => "update_at=$this->update_at"
                ]);
        }


        // evito que color sea vacio!
        if (empty($_REQUEST['color'])) {
            $this->walker([
                'dir' => 'dashboard/constructor.php', 
                'msg' => 'debes asignar al menos un color a tu reloj', 
                'code' => 404, 
                'optional_query' => "update_at=$this->update_at"
                ]);
        }

        // confirmo tener un request y updateo
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
                $this->walker([
                    'dir' => 'dashboard/constructor.php', 
                    'msg' => 'error al insertar los datos del producto', 
                    'code' => 404, 
                    'optional_query' => null
                    ]);
            } else {

                // seteo product_color
                $this->update_color();

                // guardo imagen y seteo la relación (bucle dentro de imagen)
                $this->upload_image();

                $this->walker([
                    'dir' => 'dashboard/constructor.php', 
                    'msg' => 'Datos actualizados!', 
                    'code' => 200, 
                    'optional_query' => "update_at=$this->update_at"
                    ]);
            }
        }
    }
}