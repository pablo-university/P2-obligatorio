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
