<?php
/*  ------------------------------   
$characters  = array(

    array(),
    array(),
    array()
);
?>
 ------------------------------   */

$characters  = array(

    array(
        "name" => "Bob",
        "occupation" => "superhero",
        "age" => 30,
        "special power" => "x-ray vision"
    ),

    array(
        "name" => "Sally",
        "occupation" => "superhero",
        "age" => 24,
        "special power" => "super human strength"
    ),

    array(
        "name" => "Jane",
        "occupation" => "arch Villian",
        "age" => 45,
        "special power" => "nano technology"
    )

);

foreach ($characters as $c){ // assign to $c

    // First, the list() function names placeholder variables, $k and $v,
    // which will be populated with the keys and values gathered from
    // each() function. The each() function looks at each element of 
    // the $c array and extracts the information accordingly.
    reset($c);

    // Note each() has been deprecated in PHP 8.0
    //while(list($k, $v) = each($c)){
    foreach( $c as $k => $v ) { 
        echo "$k...$v <br/>";
    }
}




?>