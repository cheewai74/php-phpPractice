<?php

// Note: Add by reference has "&" in front.

// Pass by value
function addFive($num){
    $num +=5;
}
$orignum = 10;
addFive($orignum);
echo $orignum."<br/>";

// Pass by Reference
function addSix(&$num){
    $num +=6;
}
$orignum = 10;
addSix($orignum);
echo $orignum."<br/>";


?>