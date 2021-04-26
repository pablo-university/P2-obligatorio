<?php

include_once __DIR__ . '/../../connectors/connection.php';



// $constructor_get_band = function () use ($conn) {
//     $query = "
//     SELECT *
//     FROM band
//     ";

//     $res = $conn->query($query);


//     if ($res->num_rows < 1) :
//         return null;
//     else :
//         return $res;
//     endif;
// };


class Mi
{

    // PHP 8 se definen e inicializan las propiedades en los parametros del constructor
    // (SIN asignar con $this->variable = $pepe)
    // !no es necesario declararlas fuera e inicializarlas en el constructor!

    public function __construct(
        public $conn = null
    ) {
    }

    // Get bands
    public function get_bands()
    {
        $query = "
        SELECT *
        FROM band
        ";

        // aca piensa que $conn es null pero se lo paso en el constructor
        $res = $this->conn->query($query);

        if ($res->num_rows < 1) :
            return null;
        else :
            // var_dump($res);
            return $res;
        endif;
    }

    // Get brands
    public function get_brands()
    {
        $query = "
        SELECT *
        FROM brand
        ";

        $res = $this->conn->query($query);

        if ($res->num_rows < 1) :
            return null;
        else :
            // var_dump($res);
            return $res;
        endif;
    }

    // Trae cases
    public function get_cases()
    {
        $query = "
        SELECT DISTINCT products.case
        FROM products
        ";

        $res = $this->conn->query($query);

        if ($res->num_rows < 1) :
            return null;
        else :
            // var_dump($res);
            return $res;
        endif;
    }

    // Trae colors
    public function get_colors()
    {
        $query = "
        SELECT *
        FROM color
        ";

        $res = $this->conn->query($query);

        if ($res->num_rows < 1) :
            return null;
        else :
            // var_dump($res);
            return $res;
        endif;
    }

    // Get display type
    public function get_display_types()
    {
        $query = "
        SELECT *
        FROM display_type
        ";

        $res = $this->conn->query($query);

        if ($res->num_rows < 1) :
            return null;
        else :
            // var_dump($res);
            return $res;
        endif;
    }

    // Get moments
    public function get_moments()
    {
        $query = "
        SELECT * 
        FROM moment
        ";

        $res = $this->conn->query($query);

        if ($res->num_rows < 1) :
            return null;
        else :
            // var_dump($res);
            return $res;
        endif;
    }

    // Get moments
    public function get_user_type()
    {
        $query = "
        SELECT *
        FROM moment
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

$class_get_props = new Mi($conn);
// $class_get_props->get_bands();
// echo "<hr>";
// $class_get_props->get_brands();
// echo "<hr>";
// $class_get_props->get_cases();
// echo "<hr>";
// $class_get_props->get_colors();
// echo "<hr>";
// $class_get_props->get_display_types();
// echo "<hr>";
// $class_get_props->get_moments();
// echo "<hr>";
// $class_get_props->get_user_type();