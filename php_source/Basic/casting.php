<?php
$undecided = 3.14;
$holder = (double) $undecided;
echo "is ".$holder." a double? ".is_double($holder)."<br/>"; // double
$holder = (string) $undecided;
echo "is ".$holder." a string? ".is_string($holder)."<br/>"; // string
$holder = (integer) $undecided;
echo "is ".$holder." a integer? ".is_integer($holder)."<br/>"; // integer
$holder = (double) $undecided;
echo "is ".$holder." a double? ".is_double($holder)."<br/>"; // double
$holder = (bool) $undecided;
echo "is ".$holder." a boolean? ".is_bool($holder)."<br/>"; // boolean
echo "<hr/>";
echo "Original variable type of $undecided: ";
echo gettype($undecided); // double

?>