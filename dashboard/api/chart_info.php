<?php

include_once __DIR__ . '/../../connectors/connection.php';



class Chart_info
{
    public function __construct(
        public $conn = null
    ) {
    }

    public function get_labels_brands()
    {
        $query = "
            SELECT *
            FROM moment
            ";

        // aca piensa que $conn es null pero se lo paso en el constructor
        $res = $this->conn->query($query);

        if ($res->num_rows < 1) :
            echo "res fail";
        else :
            $array = [];

            while ($data = $res->fetch_object()) {
                array_push($array, $data->moment);
            }

        
            echo implode(' ', $array);
        // no funciono!
        //echo json_encode($response);
        endif;
    }



    public function get_data_brands()
    {
        return null;
    }
}

$chart_info = new Chart_info($conn);
