<?php
$undecided = 3.144;
echo "is ".$undecided." a double? ".is_double($undecided)."<br/>"; // double

// settype($variabletochange, 'new type')
settype($undecided,'string');
echo "is ".$undecided." a string? ".is_string($undecided)."<br/>"; // string

settype($undecided,'integer');
echo "is ".$undecided." a integer? ".is_integer($undecided)."<br/>"; // integer

settype($undecided,'double');
echo "is ".$undecided." a double? ".is_double($undecided)."<br/>"; // double

settype($undecided,'boolean');
echo "is ".$undecided." a boolean? ".is_bool($undecided)."<br/>"; // boolean
?>