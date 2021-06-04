
    <!-- pintar una img -->
    <div class="">
        <?php if (!empty($data->url)) {
            $HOST = LOCAL_HOST;
            $img = $data->url;
            echo "<img class='' style='max-width: 3rem;' src=\"{$HOST}assets/img/products/{$img} \" >";
        } ?>

    </div>