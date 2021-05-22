<?php 

trait walker{
    // walker es mi funcion mensajera
    public function walker($msg = 'default message', $code = '', $optional_query = '')
    {
        header("Location: ./../constructor.php?msg=$msg&code=$code&$optional_query");
        exit();
    }
}


?>