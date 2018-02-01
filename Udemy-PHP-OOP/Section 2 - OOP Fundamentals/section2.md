# Section 2 - OOP Fundamentals

This section will include information on basic OOP in PHP, including:

*  Defining a Class
*  Class inheritance
*  Class Methods
*  Class Properties
*  Instantiating
*  Access control modifiers
*  Setters and Getters
*  Constructors

## Defining a Class

Basic syntax:
```php
class Cars {

}
```
PHP keeps track of all classes created.  To view created classes along with all the classes PHP creates automatically in a new application, use the ```get_declared_classes()``` function:
```php
$my_classes = get_declared_classes();

foreach($my_classes as $class) {
    echo $class . "<br>";
}
```

## Defining Methods

Methods are functions declared inside of a class:
```php
class Cars {
    
    function greeting() {

    }

    function anotherGreeting() {

    }
}
```
Methods within a class can be viewed by using the ```get_class_methods()``` function.  This function takes in the class name as an argument:
```php
$the_methods = get_class_methods('Cars');
foreach($the_methods as $method) {
    echo $method . "<br>";
}
```

## Instantiating a Class

Classes are typically compared to being blueprints.  Instantiating a Class creates a new object based off that blueprint:
```php
// Instances (Objects)
$bmw = new Cars();
$mercedes = new Cars();
```

Using an arrow (```->```), methods can be accessed from the instances:
```php
$bmw->greeting(); // Method accessed
```

 ## Defining Properties

 Properties are defined in a similar way to defining variables outside of classes, the difference being Class properties contain var/public/private/protected declarations before them:
 ```php
 class Cars {
    public $wheel_count = 4;
    public $door_count = 4;
}
```

These properties can be accessed from instances in the same way they access methods (using the ```->``` syntax):
```php
// Access Property from Class
echo $bmw->wheel_count . "<br>";
```

 Since these properties are declared as ```public``` they can be changed:
 ```php
 // Reassign value from Class
echo $bmw->wheel_count = 10;
```

## Class Inheritance

Inherit the properties and methods from another class:
```php
class Cars {
    public $wheels = 4;
    
    function greeting() {
        return "Hello";
    }
}

class Trucks extends Cars {
}

$tacoma = new Trucks();

// greeting() is inherited from Cars
echo $tacoma->greeting();
echo '<br>';
// $wheels is inherited from Cars
echo $tacoma->wheels;
```

Using the ```extends``` keyword, Trucks inherits properties and methods from Cars.  **NOTE** that these early examples are ```public``` so they can be accessed from instances, but if they were ```private``` or ```protected```, trying to access these methods and properties would throw an error.  More on [visibility](http://php.net/manual/en/language.oop5.visibility.php) will be discussed next.

## Access Control Modifiers

This [stack overflow](https://stackoverflow.com/questions/4361553/what-is-the-difference-between-public-private-and-protected) page gives a good explanation of the difference between ```private```, ```public``` and ```protected```:
```
public scope to make that variable/function available from anywhere, other classes and instances of the object.

private scope when you want your variable/function to be visible in its own class only.

protected scope when you want to make your variable/function visible in all classes that extend current class including the parent class.
```

## Static Modifier

```static``` can be attached to a property and a method.  The difference between a static property and a regularly property is that the regular properties attach to the instance.

A static modifier doesn't need an instance

## Getters and Setters

Getters and Setters are methods typically used to get/set information from ```private``` properties:

```php
class Cars {

    private $door_count = 4;
    
    function get_values() {
        echo $this->door_count;
    }

    function set_values() {
        $this->door_count = 10;
    }
}
```

Since the methods are not set to private, they can be accessed from instances that then interact with the private properties by calling the get/set methods:

```php
$bmw = new Cars();
$bmw->set_values();
$bmw->get_values();
```

## Referencing Parent Class with Static

When extending a class with ```static``` methods and/or properties, accessing properties can be done using the ```parent``` keyword:

```php
class Trucks extends Cars {
    static function display() {
        echo parent::car_detail();
    }
}
```

## Constructors & Destructors

The constructor method is called automatically when a class is instantiated:

```php
class Cars {

    public $wheel_count = 4;
    
    // Called automatically
    function __construct() {
        echo $this->wheel_count;
    }
}

// Echos wheel_count
$bmw = new Cars();
```

The destructor is the opposite


