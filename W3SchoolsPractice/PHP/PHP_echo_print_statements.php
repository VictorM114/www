<?php 

//echo has no return value. can take multiple parameters. marginally faster than print
//print has a return value of 1 so it can be used in expression. can take one argument

echo "<h2> PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP! <br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters";

//Display variables
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>" .$txt1 . "</h2>";
echo "Study PHP at " .$txt2 ."<br>";
echo $x + $y;

//Print statement

print "<h2>PHP is Fun!</h2>";
print "Hello World!<br>";
print "I'm about to learn PHP!";

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>" .$txt1 . "</h2>";
print "Study PHP at " .$txt2 ."<br>";
print $x + $y;
?>