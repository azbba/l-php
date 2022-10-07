# Introduction to PHP data type

PHP supports ten (10) primitive types:  

**Note: that some types need to delve more into the language to understand it.**

## Scalar types: (4 types):

A variable is a scalar when it holds a single value of the type integer, float, string, or boolean.  

### 1. boolean or bool:

A bool expresses a truth value, It can be either true or false.  
To specify a bool literal, use the constants true or false.  

```php
// Note: Both true and false are case-insensitive.
echo gettype(true); // boolean
echo '<br/>';
echo gettype(TRUE); // boolean
echo '<br/>';
echo gettype(True); // boolean
echo '<br/>';
```

### 2. Integer or int:

An int is a number of the set ℤ = {..., -2, -1, 0, 1, 2, ...}.  

```php
echo gettype(30); // integer
echo '<br/>';
```

### 3. Floating point numbers or (floats, double, real numbers):

Floating-point numbers represent numeric values with decimal digits.  

```php
echo gettype(36500.25); // double
echo '<br/>';
```

### 4. Strings:

A string is series of characters, a string literal can be specified in four different ways:(More info when we learn strings in PHP).      

1. single quoted
2. double quoted
3. heredoc syntax
4. nowdoc syntax

```php
echo gettype('AzBba'); // string
echo '<br/>';
```

## Compound types: (4 types):

Compound data includes the values that contain more than one value.  

### 1. Array:

An array is an ordered map that associates keys with values.  

```php
echo gettype(array(true, 30, 36500.25, 'AzBba'));  // array
echo '<br/>';
echo gettype([true, 30, 36500.25, 'AzBba']); // Array
echo '<br/>';
```

### 2. Object:

An object is an instance of a class. It’s a central concept in object-oriented programming.  

```php
class User
{
}

echo gettype(new User()); // object
echo '<br/>';
```

### 3. Callable:

The callable type in PHP refers to anything that can be "called", This means that it can be any of the following:  

1. String function name.
2. Anonymous function (or Closure).
3. Invokable object.
4. String static class method name.
5. Callable array.

```php
// This is just an example more info later
function hi() {
    echo 'hi';
}

function go() {
    echo 'go';
}

function run(callable $callback) {
    $callback();
}

run('hi'); // 'hi'
run('go'); // 'go'
```

### 4. iterable:

Iterable is a pseudo-type introduced in PHP 7.1, It accepts any array or object implementing the Traversable interface. Both of these types are iterable using foreach and can be used with yield from within a generator.  

## Special types: (2 types):

PHP has two special types: null and resource.  

### 1. NULL:

The null type has one value called null that represents a variable with no value.  

```php
echo gettype(NULL); // NULL
echo '<br/>';
```

### 2. Resources:

A resource is a special variable, holding a reference to an external resource. Resources are created and used by special functions, e.g. a filehandle or a database connection.  

## Check the type of values:

To check the type and value of an expression we use:

1. Using `var_dump( $value, ...$values );`: Dumps information about a variable.
2. Using `gettype( $value );`: Get the type of a variable.
3. Using the special function for every datatype: `is_[$type]( $value )`:


```php

// [01]: Dumps information about a variable:
echo '<pre>';
var_dump([true, 30, 36500.25, 'AzBba']);
echo '</pre>';

// [02]: Get the type of a variable.
echo gettype('AzBba'); // String
echo '<br/>';

// [03]: Check for a certain type:
var_dump(is_int(30)); // bool(true)
echo '<br/>';

var_dump(is_float(30.5)); // bool(true)
echo '<br/>';

var_dump(is_bool(true)); // bool(true)
echo '<br/>';
```

## Automatic Type Conversion:

As PHP is loosely typed (which means that a given variable can change its type as needed), it will automatically convert one type of variable to another whenever possible.  

```php
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
```

## Type Juggling:

To forcibly convert a variable to a certain type we use either:  
1. Type Casting.
2. Set type.

### 1. Type Casting:

Type casting converts the value to a chosen type by writing the type within parentheses before the value to convert, The casts allowed are:  

1. (int) - cast to int.
2. (bool) - cast to bool.
3. (float) - cast to float.
4. (string) - cast to string.
5. (array) - cast to array.
6. (object) - cast to object.
7. (unset) - cast to NULL.

```php
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
```

### 2. set type:

Set the type of a variable.

```php
$age = 30; // More about variable later
settype($age, 'string');
echo gettype($age);
echo '<br/>';
```

## Type declarations:

Type declarations can be added to function arguments, return values, and, as of PHP 7.4.0, class properties. They ensure that the value is of the specified type at call time, otherwise a TypeError is thrown.  

```php

// more about function later
function say_hello(string $name) {
    echo 'Hello ' . $name;
}

say_hello('AzBba');
echo '<br/>';
```