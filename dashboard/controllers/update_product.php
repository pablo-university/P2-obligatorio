<?php
include_once __DIR__ . '/../../connectors/connection.php';
include_once __DIR__ . '/../../utils/constants.php';

// clases aqui lo que sea necesario para actualizar
// mi idea seria extender de la clase agregar y poder usar algunas cosas como guardar imagen por ej
class Update
{

    public function __construct(
        public $conn,
        public $update_at
    ) {
    }

    function update_product()
    {

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
            return 'error al guardar';
        } else {
            // obtengo ultimo _id en mi propiedad de objeto
            // $this->last_id_inserted = $this->conn->insert_id;

            /*  // seteo product_color
            $this->set_product_color();
            // guardo imagen y seteo la relación (bucle dentro de imagen)
            // agregame la iamgen si no está vacío
            if (!empty($_REQUEST['image'])) {
                $this->upload_image();
            }
 */

            return 'Datos actualizados!';
        }
    }
}

// instancia
$update = new Update($conn, $_REQUEST['update_at']);

if (!empty($_REQUEST)) {
    echo '<pre>' . var_export($_REQUEST, true) . '</pre>';
    echo $update->update_product();
    // header("Location: ./../constructor.php?msg=$res");
}
