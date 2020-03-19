<?php
//strings, can use single or double quotes

$x = "Hello World!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;

//PHP integer
// non decimal number

$z = 5985;
var_dump($z);

//PHP float

$a = 10.365;
var_dump($a);

//PHP Boolean
//True or false

$b = true;
$c = false;

//PHP Array - multiple values in one single variable
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);

//PHP object - is a data type in which stores data and information on how to process data.
//An object must be explicity declared.

class Car {
    function Car() {
        $this->model = "VW";
    }
}
//create an object
$herbie =new Car();

//show object properties
echo $herbie->model;

//Null value

$x = null;
var_dump($x);
?>