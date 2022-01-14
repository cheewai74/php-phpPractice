<?php

use PhpParser\Node\Stmt\Echo_;

$testing; // Declare without assigning
echo "is null? ".is_null($testing); // check if null
echo "<br/>";
$testing = 5;
echo "is an integer?".is_int($testing); // check if integer
echo "<br/>";
$testing = "five"; 
echo "is a string?".is_string($testing); // checks if string
echo "<br/>";
$testing = 5.024;
echo "is a double?".is_double($testing); // checks if double
echo "<br/>";
$testing = true;
echo "is a boolean?".is_bool($testing); // checks if boolean
echo "<br/>";
$testing = array('apple', 'orange', 'pear'); 
echo "is an array?".is_array($testing); // check if array
echo "<br/>";
echo "is numeric?".is_numeric($testing); // check if numeric
echo "<br/>";
echo " is a resource?".is_resource($testing); // check if is resources
echo "<br/>";
echo "is an array?".is_array($testing); // check if array
echo "<br/>";
?>