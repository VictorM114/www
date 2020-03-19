<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    
<h1> My first PHP file</h1>

<?php

echo "Hello World<br>";
ECHO "Hello world";
$color = "red";
echo "My car is " .$color ."<br>";
echo "My house is " .$color ."<br>";
echo "My boat is " .$color ."<br>";
//las variables son case sensitive

//PHP variables
$txt = "Hello World";
$x = 5;
$y = 10.5;

//Rules for PHP variables
//starts with the $ sign, followed by the name of the variable
//variable name must start with a letter or the underscore character
// a variable number cannot with a number
//a variable name can only contain alpha-numeric character and underscores
//variables names are case-sensitive 

$txt = "W3Schools.com";
echo "I love " .$txt ."!";

echo $x + $y;

function myTest () {
    //using x inside this function will generate an error
    echo "<p>Variable x inside function is: </p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";

//a variable declared within a function has a local scope and can only be accessed within that function

function myTest2 (){
    global $x, $y;
    $y = $x + $y;
}

myTest2();
echo $y;

//Global variables in an array
function myTest3() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS ['y'];
}
myTest3();
echo $y;

//Static Variable
function myTest4(){
    static $x = 0;
    echo $x;
    $x++;
}

myTest4();
myTest4();
myTest4();
?>


</body>
</html>