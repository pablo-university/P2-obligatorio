<?php

// clases aqui lo que sea necesario para actualizar


if (!empty($_REQUEST)) {

    $res = 'hola mensaje de update!';
    header("Location: ./../constructor.php?msg=$res");
}
