<?php

class Cars {

    public $wheel_count = 4;
    public $door_count = 4;
    
    function car_detail() {
        return "This car has " . $this->wheel_count . " wheels";
    }
}

// Instants (Objects)
$bmw = new Cars();
$mercedes = new Cars();

// Access Property from Class
echo $bmw->wheel_count . "<br>";

// Reassign value from Class
echo $bmw->wheel_count = 10;
echo "<br>";

//  Access method with $this reference to property
echo $mercedes->car_detail();


?>