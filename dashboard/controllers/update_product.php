<?php

// clases aqui lo que sea necesario para actualizar
// mi idea seria extender de la clase agregar y poder usar algunas cosas como guardar imagen por ej


if (!empty($_REQUEST)) {
    echo '<pre>' . var_export($_REQUEST, true) . '</pre>';
    $res = 'hola mensaje de update!';
    // header("Location: ./../constructor.php?msg=$res");
}
