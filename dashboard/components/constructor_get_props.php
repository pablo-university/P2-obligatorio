<?php 
include_once __DIR__.'/../controllers/get_props.php';

// Instancia para traer todas las propiedades
$get_props_instance = new Mi($conn);

ini_set("default_charset", "UTF-8");
$res_bands = $get_props_instance->get_prop('band');
$res_brands = $get_props_instance->get_prop('brand');
$res_cases = $get_props_instance->get_prop('products', 'case');
$res_colors = $get_props_instance->get_prop('color');
$res_display_types = $get_props_instance->get_prop('display_type');
$res_moments = $get_props_instance->get_prop('moment');
$res_user_types = $get_props_instance->get_prop('user_type');

// -------- ACTUALIZACIÓN --------
// si hay obtengo id para actualizar
$id_update_at = (!empty($_REQUEST['update_at'])) ? $_REQUEST['update_at'] : null;
$res_product = null;
$res_product_color = null;
$res_product_image = [null];

// entonces tenemos id?
if (!empty($id_update_at)) {

    // trae datos para el id a actualizar
    $res_product = $get_props_instance->get_product($id_update_at);
    // copio datos para trabajar colores
    $res_product_color = $res_product;

    // obtiene los datos como objeto
    $res_product = $res_product->fetch_object();

    // respuesta de la consulta para actualizar
    // echo '<pre>' . var_export($res_product, true) . '</pre>';

    // trae las imagenes para actualizar!
    $res_product_image = $get_props_instance->get_prop('images', '*', "WHERE images.id_product = $id_update_at");
}

// chequea si coincide colores del producto
// con el color que se está recorriendo
function color_is_checked($res_product_color, $color)
{
    if (!empty($res_product_color)) {
        foreach ($res_product_color as $key => $value) {
            if (!empty($value['color'] and ($value['color'] == $color))) {
                return 'checked';
            }
        }
    }
    return '';
}