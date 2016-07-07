<?php

$xml = file_get_contents('http://feeds.feedburner.com/VentureBeat');

var_dump(iterator_to_array(new SimpleXMLIterator($xml)));