<?php

class Setted {
    
    private $_options = array();
    
    public function __set($name, $value) {
        $this->_options[$name] = $value;
    }
    
    public function __call($name, $arguments) {
        if($property = $this->getNameFromCall($name)){
            
            $this->$property = $arguments[0];
        }
    }
    
    private function getNameFromCall($call_name) {
        return preg_match('/^set(\w+)&/', $call_name, $match) ? $match[1] : null;
    }
}

$x = new Setted();

$x->setTitle('title');

var_dump($x);