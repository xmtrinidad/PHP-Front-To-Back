<?php

class Cars {

    public $wheel_count = 4;

    static $door_count = 4;
    
    // Called automatically
    function __construct() {
        echo "Wheel count: " . $this->wheel_count . "<br>";
        echo "Door count: " . ++self::$door_count . "<br>";
    }

    // Called automatically
    function __destruct() {
        echo "Destructor called -- Wheel Count: " . --self::$door_count . "<br>";
    }
}

// Instants (Objects)
$bmw = new Cars();

?>