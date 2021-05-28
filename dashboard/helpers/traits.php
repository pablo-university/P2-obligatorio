<?php

include_once __DIR__.'/../../utils/constants.php';
trait trait_walker
{
    // walker es mi funcion mensajera
    public function walker($params)
    {
        ['dir' => $dir, 'msg' => $msg, 'code' => $code, 'optional_query' => $optional_query] = $params;

        $HOST = LOCAL_HOST;
        // echo "Location: $HOST$dir?msg=$msg&code=$code&$optional_query";
        header("Location: $HOST$dir?msg=$msg&code=$code&$optional_query");
        exit();
    }
}

trait trait_check_image_valide
{
    // walker es mi funcion mensajera
    public function check_image_valide($optional_query = null)
    {
        // check image is real
        foreach ($_FILES["image"]["tmp_name"] as $key => $value) {
            $check = getimagesize($value);
            if (!$check) {
                echo "llamar el walker y salir";
                $this->walker([
                    'dir' => 'dashboard/constructor.php', 
                    'msg' => 'lo que ingresaste no es una imagen', 
                    'code' => 404, 
                    'optional_query' => $optional_query
                    ]);
            } 
        }
    }
}

// USO
// walker(['dir' => $dir, 'msg' => $msg, 'code' => $code, 'optional_query' => $optional_query]);