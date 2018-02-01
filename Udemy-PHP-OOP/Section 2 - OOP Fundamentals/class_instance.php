<?php

class Cars {
    
    function greeting() {
        echo "Hello Student!";
    }

    function anotherGreeting() {

    }
}

// Instants (Objects)
$bmw = new Cars();
$mercedes = new Cars();

$bmw->greeting(); // Method accessed

?>