<?php

if (isset($_GET['load']) && $file = $_GET['load']) {
    include $file; die;
}

if (isset($_GET['view']) && $file = $_GET['view']) {
    $data = file_get_contents($file);

    echo htmlspecialchars($data); die;
}

$folder = isset($_GET['path']) ? $_GET['path'] : __DIR__;

$dir = scandir($folder);

?>

<?php if ($folder == __DIR__) : ?>

<style>
    * {
        margin:0;
        padding:0;
    }

    .tree-container {
        box-sizing: border-box;
        padding: 10px;
        height: 100%;
        overflow: scroll;
    }

    .file-container {
        height: 100%;
        overflow: scroll;
    }

    .tree {
        padding-left: 10px;
    }

    .hidden {
        display: none;
    }

    @media screen and (min-width: 800px) {
        .tree-container {
            width: 30%;
            float: left;
        }

        .file-container {
            width: 70%;
            float: left;
        }
    }

</style>

<div class="tree-container">

<?php endif; ?>

<?= basename($folder) ?>

<ul class="tree">
    <?php foreach ($dir as $file) : ?>
        <?php if ($file != '.' && $file != '..') : ?>
            <?php if (is_dir("$folder/$file")) : ?>
                <li class="dir" data-link="<?= "$folder/$file" ?>">
                    <?= $file ?>
                </li>
            <?php else : ?>
                <li class="file" data-link="<?= "$folder/$file" ?>">
                    <?= $file ?>
                    <span class="source">@</span>
                </li>
            <?php endif ?>
        <?php endif ?>
    <?php endforeach ?>
</ul>

<?php if ($folder == __DIR__) : ?>

</div>

    <pre class="file-container" contenteditable="true"></pre>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <script>

    (function ($) {

        $('.tree').click(function(e) {

            $elem = $(e.target);

            if ($elem.hasClass('file')) {

                $('.file-container').load('?load=' + encodeURI($elem.data('link')));
            }

            if ($elem.hasClass('dir')) {

                if ($('.tree', $elem).length == 0) {
                    $elem.load('?path=' + encodeURI($elem.data('link')));
                } else {
                    $('.tree', $elem).toggleClass('hidden');
                }
            }

            if ($elem.hasClass('source')) {

                $file = $elem.parents('.file');

                $('.file-container').load('?view=' + encodeURI($file.data('link')));
            }

        });

    } (jQuery));

    </script>
<?php endif ?>
