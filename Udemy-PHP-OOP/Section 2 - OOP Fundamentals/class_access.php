<?php

class Cars {

    public $wheel_count = 4;
    private $door_count = 4;
    protected $seat_count = 2;
    
    function car_detail() {
        echo $this->wheel_count;
        echo $this->door_count;
        echo $this->seat_count;
    }
}

// Instants (Objects)
$bmw = new Cars();

echo $bmw->wheel_count;
// echo $bmw->door_count; // Error - can't access private property
// echo $bmw->seat_count; // Error - can't access private protected

?>