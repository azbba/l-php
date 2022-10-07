<?php

/**
 * Introduction to data type in PHP:
 * PHP supports ten (10) primitive types:
 * ======================
 * Scalar types: (4 types):
 * [01] => bool
 * [02] => int
 * [03] => float
 * [04] => string
 * ======================
 * Compound types: (4 type):
 * [01] => array
 * [02] => object
 * [03] => callable
 * [04] => iterable
 * ======================
 * Special types: (2 type):
 * [01] => resource
 * [02] => NULL
 * ======================
 * To check the type and value of an expression we use:
 * [01] => var_dump( $value, ...$values )   => Dumps information about a variable.
 * [02] => gettype( $value )                => Get the type of a variable
 * [03] => is_[$type]( $value )             => Check for a certain type Exp: ( is_int($value) => to check if value is a integer )
 * ======================
 * To forcibly convert a variable to a certain type we use either:
 * [01] => Type Casting                     => Type casting converts the value to a chosen type by writing the type within parentheses before the value to convert.
 * [02] => settype( $value, $type )         => Set the type of a variable
 * ======================
 * Type declarations:
 * Type declarations can be added to :
 * 1- function arguments.
 * 2- return values.
 * 3- class properties.
 * ======================
 * Automatic Type Conversion:
 * PHP will automatically convert one type of variable to another whenever possible
 */

// Scalar types

// [01] bool or boolean
echo gettype(true);
echo '<br/>';
// [02] int or interger
echo gettype(30);
echo '<br/>';
// float or floating-point number, double
echo gettype(36500.25);
echo '<br/>';
// string
echo gettype('AzBba');
echo '<br/>';

// Compound types

// [01] array
echo gettype(array(true, 30, 36500.25, 'AzBba'));
echo '<br/>';
echo gettype([true, 30, 36500.25, 'AzBba']);
echo '<br/>';

// [02] object:
class User
{
}

echo gettype(new User());
echo '<br/>';

// Special types:

// [01] NULL
echo gettype(NULL);
echo '<br/>';

// Note: that some types need to delve more into the language to understand it.

// Dumps information about a variable:
echo '<pre>';
var_dump([true, 30, 36500.25, 'AzBba']);
echo '</pre>';

// Check for a certain type:
var_dump(is_int(30));
echo '<br/>';
var_dump(is_string('AzBba'));
echo '<br/>';
var_dump(is_float(30.5));
echo '<br/>';
var_dump(is_bool(true));
echo '<br/>';
// ...


// Automatic Type Conversion:
echo 1 + '2'; // 3
echo gettype(1 + '2'); // interger
echo '<br/>';
echo true; // 1
echo '<br/>';
echo gettype(true); // bool
echo '<br/>';
echo gettype(true + true); // (1 + 1 = 2) interger
echo '<br/>';
echo gettype(10 + 30.5); // double
echo '<br/>';

/**
 * Type Casting:
 * The casts allowed are:
 * (int) - cast to int
 * (bool) - cast to bool
 * (float) - cast to float
 * (string) - cast to string
 * (array) - cast to array
 * (object) - cast to object
 * (unset) - cast to NULL
 */
echo gettype(30); // int
echo '<br/>';
echo gettype((string) 30); // convert int to string
echo '<br/>';
echo 30.5; // 30.5
echo '<br/>';
echo (int) 30.5; // 30
echo '<br/>';
echo gettype((int) 30.5); // convert float to interger 
echo '<br/>';

// Set the type of a variable:
$age = 30; // More about variable later
settype($age, 'string');
echo gettype($age);
echo '<br/>';

// Type declarations: (more about function later):
function say_hello(string $name)
{
    echo 'Hello ' . $name;
}

say_hello('AzBba');
echo '<br/>';