# PHP-Front-To-Back

This repo will keep track of my progress and practice projects as I go through the [PHP-Front-To-Back](https://www.youtube.com/watch?v=oJbfyzaA2QA&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn) tutorial playlist from [Traversy Media](https://www.youtube.com/channel/UC29ju8bIPH5as8OGnQzwJyA).

My intent is to get a basic understanding of PHP.  Although I am mainly proficient in JavaScript technologies, I realize the importance of knowing PHP.  If, in the future, there is a need to dive deeper into PHP I will do so using what I learn from this series as a starting point.

**Table of Contents**       
[Part 1: Series Introduction](#part-1-series-introduction)          
[Part 2: PHP7 with XAMPP](#part-2-php7-with-xampp)       
[Part 3: Variables, Constants, Data Types](#part-3-variables-constants-data-types)


## Part 1: Series Introduction

Included in this series:

* Basic principles of PHP
* PHP7 / Apache / MySQL Setup
* Code Syntax (vars, arrays, loops, condiitons, functions, etc)
* Procedural & OOP
* Dynamic Pages
* Form Submission / Superglobals
* Working with Databases
* Mini Projects (Contact Form, User Login System, etc)

### What is PHP

PHP stands for PHP: Hypertext Preprocessor.  It's a **server-side programming/scriping language** that can be embedded directly within HTML using ```<?php ?>``` tag.  The file, however, must have a *.php* extension.

### How does PHP work

1.  Client makes a request
2.  Server runs PHP / extensions
3.  Query database if needed
    * MySQL one of the most popular
4.  Load other files if needed
5.  Result is sent back to client
    * Usually the HTML created from the script


### Why Use PHP?

*  Easy to learn
*  Free & Open source
*  Great support and cross platform
*  Frameworks & Database Compatibility

### What can PHP Do?

*  Create dynamic page content
*  Interact with databases & files on the server
*  Collect & process forms
*  Send / Receive cookies
*  Access control
*  Encrypt data

---

# Part 2: PHP7 with XAMPP

XAMPP is a popular software suite used for PHP development on Windows.  It includes an Apache web server, MariaDB (basically mySQL), PHP + Perl.

MAMP is another alternative that works on Windows and Mac that offers the same services as XAMPP.

Download from [here](https://www.apachefriends.org/index.html)

### Set-up phpMyAdmin with a password

By default the database part of XAMPP isn't password protected.  To set up a password:

1.  After running XAMPP and starting Apache and mySQL, navigate the phpMyAdmin (http://localhost/phpmyadmin/)

2.  Click the *databases* tab then the *User accounts* tab

3.  Look for *root* User name with Host name *localhost* and click *Edit Privileges*

4.  Enter a password and click *Go*

5.  In order for the password to take affect and the database to work again, the config file needs to be edited with the password included:
    *  Navigate to the xampp folder
    *  Search for the config.inc file and open
    *  Under ```/* Authentication type and info */``` there is the following line: ```$cfg['Servers'][$i]['password'] = '';```
    *  Place the password created for the database user in between the empty quotes: ```$cfg['Servers'][$i]['password'] = 'USER_PASSWORD_HERE';```


## Part 3: Variables, Constants, Data Types

To run PHP code, it needs to be wrapped around a ```<?php ?>```.  The following line is written in PHP but will render HTML.

```php
<h1><?php echo 'Hello World';?></h1>
```

Variables written in PHP must start with a ```$``` and concatenation is done using a period.

```php
<?php
    $string1 = 'Hello';
    $string2 = 'World';
    $greeting = $string1 . ' ' . $string2;
    $greeting2 = "$string1 $string2";
?>
```

### Data Types

PHP contains the following variable types:
* String
* Integers
* Floats
* Booleans
* Arrays
* Objects
* NULL
* Resource

### Constants

Constants can be defined using ```define(CONSTANT_NAME, VALUE)```:
```php
define('GREETING', 'Hello Everyone');

    echo '<h3>' . GREETING . '</h3>';
```

## Part 4: PHP Arrays

Two ways to create indexed arrays:
```php
<?php 
    $people = array('Kevin', 'Jeremy', 'Sarah');
    $cars = ['Honda', 'Toyota', 'Ford'];
?>
```

Arrays in PHP can also be associative:
```php
<?php 
    $people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
    echo $people['Brad']; // would print 35
?>
```