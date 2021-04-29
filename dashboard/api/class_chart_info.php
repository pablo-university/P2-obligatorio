<?php

include_once __DIR__ . '/../../connectors/connection.php';



class Chart_info
{
    public function __construct(
        public $conn = null
    ) {
    }

    private function get_labels_brands()
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
            $array_labels = [];

            while ($data = $res->fetch_object()) {
                array_push($array_labels, $data->brand);
            }
            
            // retorno mi JSON
            return $array_labels;
        endif;
    }



    private function get_data_brands()
    {
        foreach ($this->get_labels_brands() as $key => $value) {
            $query = "
            SELECT COUNT(*) AS res
            FROM products P
            WHERE P.brand = $value
            ";
        }
        // ---
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

            // $res->fetch_object()->res;

            
            echo "----";
            while ($data = $res->fetch_object()) {
                array_push($array, $data->res);
            }

            return $array[0];
        endif;
    }

    public function chart_main(){
        $array_data =  $this->get_data_brands();
        $array_labels = $this->get_labels_brands();
        return json_encode(["labels" => $array_labels, "data" => $array_data], JSON_UNESCAPED_UNICODE);
    }
}

$chart_info = new Chart_info($conn);
