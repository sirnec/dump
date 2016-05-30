<?php

if ($file = $_GET['load']) {
    echo htmlspecialchars(file_get_contents($file)); die;
}

$folder = $_GET['path'] ?: __DIR__;

$dir = scandir($folder);

?>

<?= basename($folder) ?>

<ul class="tree">
    <?php foreach ($dir as $file) : ?>
        <?php if ($file != '.' && $file != '..') : ?>
            <?php if (is_dir("$folder/$file")) : ?>
                <li class="dir" data-link="<?= "$folder/$file" ?>"><?= $file ?></li>
            <?php else : ?>
                <li class="file" data-link="<?= "$folder/$file" ?>"><?= $file ?></li>
            <?php endif ?>
        <?php endif ?>
    <?php endforeach ?>
</ul>

<?php if ($folder == __DIR__) : ?>

    <pre class="file-container"></pre>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <script>

    (function ($) {

        $('.tree').click(function(e) {

            $elem = $(e.target);

            if ($elem.hasClass('file')) {

                $('.file-container').load('?load=' + encodeURI($elem.data('link')));
            }

            if ($elem.hasClass('dir') && $('.tree', $elem).length == 0) {

                $elem.load('?path=' + encodeURI($elem.data('link')));
            }

        });

    } (jQuery));

    </script>
<?php endif ?>
