<?php

class StaticBase {
    
    static protected $name;
    
    public function setName($name) {
        
        self::$name = $name;
        
        return $this;
    }
    
    static protected $secret;
    
    public function setSecret($secret) {
        
        self::$secret = $secret;
        
        return $this;
    }
}

class ExtentionOfStatic extends StaticBase {
    
    public function getCredentials() {
        
        echo self::$name . self::$secret;
    }
}

$static = new StaticBase();

$static
    ->setName('my_name')
    ->setSecret('my_secret')
;

$ext = new ExtentionOfStatic();

$ext->getCredentials();

