<?php

include_once __DIR__ . '/../../connectors/connection.php';



class Mi
{

    // PHP 8 se definen e inicializan las propiedades en los parametros del constructor
    // (SIN asignar con $this->variable = $pepe)
    // !no es necesario declararlas fuera e inicializarlas en el constructor!

    public function __construct(
        public $conn = null
    ) {
    }

    // trae todo y si hay busqueda busca
    public function get_all_products($search)
    {
        $query = "
        SELECT *
        FROM products AS P
        ";

        // si search esta seteado...
        if (isset($search)):
            $query .= "
            WHERE 
            title LIKE '%$search%' OR 
            description LIKE '%$search%' OR
            P.brand LIKE '%$search%' OR
            P.case LIKE '%$search%' OR
            P.display_type LIKE '%$search%' OR
            P.price LIKE '%$search%' OR
            P.stock LIKE '%$search%' OR
            P.user_type LIKE '%$search%'
            ";
        endif;

        
        $res = $this->conn->query($query);

        if ($res->num_rows < 1) :
            return null;
        else :
            return $res;
        endif;
    }

    // trae propiedades, hay que especificarle tabla y columna
    public function get_prop($table, $column)
    {
        $query = "
        SELECT DISTINCT $table.$column
        FROM $table
        ";

        $res = $this->conn->query($query);

        if ($res->num_rows < 1) :
            return null;
        else :
            // var_dump($res);
            return $res;
        endif;
    }


    // count_total_value (para index top, saber total valores en sale etc...)
    public function count_value_in_true($table, $column)
    {
        $query = "
        SELECT COUNT($column) AS res
        FROM $table
        WHERE $column IS TRUE
        ";

        $res = $this->conn->query($query);

        if ($res->num_rows < 1) :
            return null;
        else :
            // var_dump($res);
            return $res;
        endif;
    }
}
// get_all_products
$get_all_products = new Mi($conn);

// Instancia para traer todas las propiedades
$class_get_props = new Mi($conn);

// instancia para contar valores de cantidad envio gratis en sale etc
$count_value_in_true = new Mi($conn);


