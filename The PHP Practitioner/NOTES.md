#  The PHP Practioner

I recently discovered Laracasts and, based on the research I have done, it is a good place for PHP related tutorials.  

I'm going go through this beginners course to review PHP concepts I've learned in other tutorials and to see if I can pick up anything new that I missed before.

## Overview of new things learned

* Shorthand syntax for PHP echo
    * ```<?= $myValue; ?>```

* Using foreach to get key/value
    * ```foreach($item as $key => $val)```
    
* Separating views and controllers
    * **index.view.php** that holds the HTML and PHP variable refereces
    * **index.php** that contains the variable definitions and view requires/includes
    
 

## Separating PHP Logic From Presentation

So far in this series, even though it is still introductory and many of the things I've seen before, separating PHP logic from presentation is something that I feel I need to pay more attention to.

The convention used in this project, and a best practice in general, is to name a file like **myfilename.view.php** and this file will contain the HTML (the view) and any variable names.

This is an example of an index.view.php file:
```php
    <body>
    
        <header>
    
            <h1>
    
                <?= $greeting; ?>
    
            </h1>
    
        </header>
    
    </body>
```

Then **index.php** contains the logic that will render the variables in the view file:
```php
    <?php
    
    $greeting = 'Hello World';
    
    
    require 'index.view.php';
```

