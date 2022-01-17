<?php
class myCar{
    var $color = "silver";
    var $make = "Mazda";
    var $model = "Protege5";
}

$car = new myCar();
echo "I drive a : ".$car -> color." ".$car-> make." ".$car->model;
?>