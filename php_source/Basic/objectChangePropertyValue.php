<?php

// $this variable with ->  enable you to access any property.

class myClass{
    var $name = "Jimbo";
    function setName($n){
        $this->name = $n;
    }

    function sayHello(){
        echo "HELLO! My name is ".$this->name;
    }
}

$object1  = new myClass();
$object1 -> setName("Moss");
$object1 ->sayHello();

?>