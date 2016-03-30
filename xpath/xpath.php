<?php

$document = new DOMDocument();

$raw_html = file_get_contents(__DIR__ . '/xpath.html');

$html = mb_convert_encoding($raw_html, 'HTML-ENTITIES', 'UTF-8');

$document->loadHTML($html);

$xpath = new DOMXPath($document);

$elems = $xpath->query("//*[contains(concat(' ', @class, ' '), ' head ')]");

var_dump($elems);

for($i = 0; $i < $elems->length; $i++) {
    echo '<pre>' . $document->saveHTML($elems->item($i)) . '</pre>';
}