<?php

class Cars {

    static $wheel_count = 4;
    static $door_count = 4;
    
    /*
        Using a static method, $this-> can no longer
        be used because an instance isn't used to
        access the method data.  Static syntax has to be used

        Non-Static:
        echo $this->wheel_count;
        echo $this->door_count;
        echo $this->seat_count;
    */
    static function car_detail() {
        echo Cars::$wheel_count;
        echo Cars::$door_count;
    }
}

// Instants (Objects)
// $bmw = new Cars();

// echo $bmw->door_count; // ERROR: Using an instance, can't find static property

/*
    With static set on the $door_count property
    an instance is no longer needed.  To access the
    static property use the following syntax:
    
    ClassName::$static_property
*/
echo Cars::$door_count;

// Access static method the same way
Cars::car_detail();

?>