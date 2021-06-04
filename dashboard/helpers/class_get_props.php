<?php

class Mi
{

    // PHP 8 se definen e inicializan las propiedades en los parametros del constructor
    // (SIN asignar con $this->variable = $pepe)
    // !no es necesario declararlas fuera e inicializarlas en el constructor!

    public function __construct(
        public $conn
    ) {
    }

    // trae todo y si hay busqueda busca
    public function get_all_products($current_page = null, $amount = null)
    {

        $SELECT = "
        SELECT P.*, I.url
        FROM products AS P

        LEFT JOIN images AS I
	    ON P._id = I.id_product
        ";
        $WHERE = "
        WHERE true
        ";
        $GROUP_BY = "
        GROUP BY P._id
        ";
        $ORDER_BY = "";
        $LIMIT = "";

        // WHERE SECTION
        // si search esta seteado...
        if (!empty($_REQUEST['search'])) :
            $search = $_REQUEST['search'];
            $WHERE .= " AND 
            (
            P.title LIKE '%$search%' OR 
            P.description LIKE '%$search%' OR
            P.brand LIKE '%$search%' OR
            P.case LIKE '%$search%' OR
            P.display_type LIKE '%$search%' OR
            P.price LIKE '%$search%' OR
            P.stock LIKE '%$search%' OR
            P.user_type LIKE '%$search%'
            )
             ";
        endif;

        // LIMIT AND current_page
        // tomar pagina actual, si existe
        if (isset($current_page)) {

            // calculo
            $current_page = $current_page * $amount;
            $LIMIT .= "
                LIMIT $current_page, $amount
            ";
        }

        // ORDER BY SECTION
        // si orderBy esta seteado
        if (!empty($_REQUEST['orderBy'])) {
            $ORDER_BY .= "ORDER BY (P.$_REQUEST[orderBy])";
        }
        // si order_asc esta seteado
        if (isset($_REQUEST['order_asc'])) {
            $ORDER_BY .= "ORDER BY P.price ASC";
        }
        // si order_desc esta seteado
        if (isset($_REQUEST['order_desc'])) {
            $ORDER_BY .= "ORDER BY P.price DESC";
        }

        $query = "
        $SELECT
        $WHERE
        $GROUP_BY
        $ORDER_BY
        $LIMIT
        ";

        $res = $this->conn->query($query);

        if (!$res) :
            return null;
        else :
            return $res;
        endif;
    }

    function get_product($_id)
    {
        // retornar el resultado de esa consulta
        // uso _id_img para borrar la imagen en upodates
        $query = "
        SELECT P.*, C.*, I.url, I._id AS _id_img
        FROM products P
        
        LEFT JOIN images I
        ON P._id = I.id_product

        JOIN product_color PC
        ON P._id = PC.id_product
        
        JOIN color C
        ON PC.id_color = C._id

        WHERE P._id = $_id
        ";
        $res = $this->conn->query($query);

        if (!$res) :
            return null;
        else :
            return $res;
        endif;
    }

    // trae propiedades, hay que especificarle tabla
    // uso: get_prop('table_name', '*', 'column')
    public function get_prop($table, $column = '*', $where = '')
    {
        // $table.$column, _id
        $query = "
            SELECT $column
            FROM $table
            $where
        ";
        // GROUP BY ($table.$column)

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
