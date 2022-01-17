<?php
    class myClass{
        // Code will go here.
    }

    $object1 = new myClass();
    echo "\$object  is an ".gettype($object1).".<br/>";

    if(is_object($object1)){
        echo "Really! I swear \$Object1 is an object!";
    }
?>