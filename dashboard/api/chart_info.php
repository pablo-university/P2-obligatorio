<?php

include_once __DIR__ . '/../../connectors/connection.php';

header('Content-Type: application/json');

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
            FROM brand
            ";

        // aca piensa que $conn es null pero se lo paso en el constructor
        $res = $this->conn->query($query);

        if ($res->num_rows < 1) :
            echo "res fail";
        else :
            $array = [];

            while ($data = $res->fetch_object()) {
                array_push($array, $data->brand);
            }
            
            // retorno mi JSON
            return json_encode(["labels" => $array], JSON_UNESCAPED_UNICODE);
        endif;
    }



    public function get_data_brands()
    {
        $query = "
            SELECT COUNT(*) AS res
            FROM products P
            WHERE P.brand = 'kaunas'
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


            // echo implode(' ', $array);
            // no funciono!

            // echo json_encode(["data" => $array], JSON_UNESCAPED_UNICODE);
        endif;
    }
}

$chart_info = new Chart_info($conn);
