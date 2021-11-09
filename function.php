<?php

function is_palindrome($string){
    $string = strtolower($string);
    $string = str_replace(' ', '', $string);
    $pal_check = ($string == strrev($string));
    return $pal_check;
}

$check_string = 'Race Car';
if( is_palindrome($check_string)){
    echo "<p>$check_string is a palindrome</p>";
}

?>