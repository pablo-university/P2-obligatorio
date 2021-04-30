<?php

include_once __DIR__ . '/../../connectors/connection.php';



class Chart_info
{
    public function __construct(
        public $conn = null,
        public $target = 'brand'
    ) {
    }

    private function get_labels()
    {
        $query = "
            SELECT *
            FROM $this->target
            ";

        // aca piensa que $conn es null pero se lo paso en el constructor
        $res = $this->conn->query($query);

        if ($res->num_rows < 1) :
            echo "res fail";
        else :

            $array_labels = [];

            // obtengo target del objeto
            $target = $this->target;

            while ($data = $res->fetch_object()) {
                array_push($array_labels, $data->$target);
            }

            // retorno mi JSON
            return $array_labels;
        endif;
    }



    private function get_data()
    {
        $data = [];
        // por cda marca encontrada contá cuántos productos hay
        foreach ($this->get_labels() as $key => $value) {
            $query = "
            SELECT COUNT(*) AS res
            FROM products P
            WHERE P.$this->target = '$value'
            ";

            $res = $this->conn->query($query);

            if ($res->num_rows < 1) :
                return [];
            else :
                array_push($data, $res->fetch_object()->res);
            endif;
        }

        return $data;
    }

    public function chart_main()
    {
        $array_data =  $this->get_data();
        $array_labels = $this->get_labels();
        $response = json_encode(["labels" => $array_labels, "data" => $array_data], JSON_UNESCAPED_UNICODE);
        return $response;
    }
}



// $chart_info = new Chart_info($conn, 'brand');
