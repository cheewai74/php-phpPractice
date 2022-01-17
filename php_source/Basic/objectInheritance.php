<?php

use myClass as GlobalMyClass;

class myClass {
    var $name = "Matt";

    function myClass($n){
        $this->name = $n;
    }

    function sayHello(){
        echo "HELLO! My name is  ".$this->name;
    }
}

class childClass extends myClass{
    // Code goes here.
    // -- Overriding
    function sayHello()
    {
        echo "I will not tell you my name.";
    }
}

$object1 = new childClass("Baby Matt");
$object1 -> sayHello();

?>