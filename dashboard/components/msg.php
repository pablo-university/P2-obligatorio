<?php
// codigo controlador
$code_data = 'success';
if (!empty($_REQUEST['code'])) {

    switch ($_REQUEST['code']) {
        case 200:
            $code_data = 'success';
            break;
        case 404:
            $code_data = 'warning';
            break;
        default:
        $code_data = 'success';
    }
}

?>


<?php if (!empty($_REQUEST['msg'])) { ?>



    <div class="alert <?= 'alert-'.$code_data ?> alert-dismissible fade show" role="alert">
        <?= $_REQUEST['msg'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>




<?php } ?>