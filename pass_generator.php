<?php

$alphabet = 'absdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ0123456789@$?!_=';

function generate($alphabet, $length){
    
    $pass = '';
    
    $alphabet_length = strlen($alphabet);
    
    for($i = 0; $i < $length; $i++) {
        
        $pos = rand(0, $alphabet_length - 1);
        
        $pass .= substr($alphabet, $pos, 1);
    }
    
    return $pass;
}

$pass = '';

do {
    
    $pass = generate($alphabet, 20);
    
}while(!preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[@$?!_=])/', $pass));

echo $pass;

