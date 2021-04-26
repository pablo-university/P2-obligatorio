<?php 

include_once __DIR__.'/../../connectors/connection.php';



$constructor_get_band = function () use ($conn) {
    $query = "
    SELECT *
    FROM band
    ";

    $res = $conn->query($query);


    if ($res->num_rows < 1) :
        return null;
    else :
        return $res;
    endif;

};

$constructor_get_band = function () use ($conn) {
    $query = "
    SELECT *
    FROM band
    ";

    $res = $conn->query($query);


    if ($res->num_rows < 1) :
        return null;
    else :
        return $res;
    endif;

};


?>