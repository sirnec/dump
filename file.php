<?php

$file_array = file(__DIR__ . '/android_dist', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$path = '/home/rhinoda/soft';

foreach ($file_array as $apk) {
    $name = "$path/$apk";

    //file_put_contents($name, 'apk');

    var_dump($name);
}
