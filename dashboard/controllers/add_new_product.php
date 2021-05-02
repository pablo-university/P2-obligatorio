<?php 
// aqui en este php estaría agregando a la base de datos

echo '<pre>' . var_export($_FILES, true) . '</pre>';
// echo __DIR__;
echo exec('whoami'); 
// $target_path = __DIR__.'/';
$target_path = './upload/';
$target_path = $target_path . basename($_FILES['image']['name']);

if (move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
    echo 'movido';
}else{
    echo 'error';
}

?>