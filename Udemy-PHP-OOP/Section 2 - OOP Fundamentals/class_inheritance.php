<?php

class Cars {
    public $wheels = 4;
    
    function greeting() {
        return "Hello";
    }
}

class Trucks extends Cars {
}

$bmw = new Cars();
$tacoma = new Trucks();

// greeting() is inherited from Cars
echo $tacoma->greeting();
echo '<br>';
// $wheels is inherited from Cars
echo $tacoma->wheels;

?>