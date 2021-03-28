<?php include_once __DIR__ . '/../components/template/layout.php'; ?>

<?php function content(): void
{ ?>
    <?php include_once __DIR__ . '/components/header.php'; ?>
    <div class='container-client p-5'>
        <h1 class="display-5 text-center text-info">No se pudo encontrar la página que requieres</h1>
    </div>
    <?php include_once __DIR__ . '/components/footer.php'; ?>
<?php } ?>

<?php layout("content"); ?>