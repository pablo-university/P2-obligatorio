<?php if (!empty($_REQUEST['msg'])) { ?>
    <div class="alert <?= empty($_REQUEST['code']) ? 'alert-success' : 'alert-warning' ?> alert-dismissible fade show" role="alert">
        <?= $_REQUEST['msg'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } ?>

