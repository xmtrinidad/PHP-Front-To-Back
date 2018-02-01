# Section 4 - Database Class

This section will set-up a connection to the database, initialize files, create the database class and its helper method.

## Setting up the DB Connection

For this project, the database connection variables are set using constant variables using ```define()```

```php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','cELrzWbzad3dAHot');
define('DB_NAME','gallery_db');
```

Then these variables are used to make the connection using mysqli:

```php
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
```

## The Database Class

The Database Class in this project contains the ```$connection``` property and a method called ```open_db_connection``` that creates the connection as noted earlier.

In order for this connection to be run automatically when the class is instantiated, the ```open_db_connection()``` is used within the constructor:

```php
function __construct() {
    $this->open_db_connection();
}
```

(The connection variables and other required database information is included in a separate file named **init.php**)

Something to point out about the connection is that it uses the object-oriented approach to connected to the database:

```php
$this->connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
```

Rather than using the procedural approach, this example creates a mysqli instance using the **new** keyword and passes the required variables into it.

More information about mysqli procedural vs object oriented can be found at this [stack overflow](https://stackoverflow.com/questions/14710195/why-is-object-oriented-php-with-mysqli-better-than-the-procedural-approach) page.

From what I gathered, although the procedural approach would work, PHP has been moving towards OOP and, in a case like in this example, OOP should be used.

The Database Class has several more methods, including a query, confirm_query, escape_string, and the_insert_id, methods.



