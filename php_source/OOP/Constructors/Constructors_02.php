<?php
// The constructor methods starts with 2  underscores (__) and 
// the word 'construct'.

class test
{
    var $name;

    function __construct($person_name){
        $this -> name = $person_name;
    }

    function showName(){
        echo "My Name is " .$this -> name;
    }

}

$obj = new test("Moss");
$obj -> showName();
?>