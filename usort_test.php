<?php

$arr = [
    'names' => [],
];

for ($i = 0; $i < 20; $i++) {
    
    $arr['names'][] = [
        'pos' => rand(0, 20),
        'name' => "name-$i,"
    ];
}

usort($arr['names'], function($a, $b) {
    return $a['pos'] > $b['pos'];
});
echo "<pre>";
foreach ($arr['names'] as $name){
    echo "$name[pos] $name[name] \n";
}
