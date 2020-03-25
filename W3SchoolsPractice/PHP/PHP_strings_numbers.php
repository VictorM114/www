<?php 
//PHP strings 

//strlen() return the lenght of a string
echo strlen("Hello World!");
echo "<br>";

//str_word_count counts the numbers of words in a string
echo str_word_count("Hello World!");
echo "<br>";

//strrev() reverses a string
echo strrev("Hello world!");
echo "<br>";

//strpos() searches for a specific text within a string. If a match is found the function returns the character position of the 
// first match. If no match is found it will return false.
echo strpos("Hello world!", "world");
echo "<br>";

//str_replace()- replaces some characters with some other characters in a string
echo str_replace("world", "Dolly", "Hello world!");
echo "<br>";

//Functions to check if the type of a variable is integer
$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));

$x = 10.365;
var_dump(is_int($x));

//PHP Infinity
//is_finite()
//is_infinite()

$x = 1.9e411;
var_dump($x);

//PHP NaN is used for impossible mathematical operations
$x = acos(8);
var_dump($x);

//PHP Numerical Strings can be used to find whether a variable is numeric
$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));

//PHP Casting Strings and Floats to Integers
//(int), (integer) or intval() are often used to convert a value to an integer.

$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;

?>