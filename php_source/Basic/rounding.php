<?php
$num=98.6;
echo round($num) .'<br>';
echo floor($num) .'<br>';
echo ceil($num) .'<br>';

$width = 3264;
$height = 4928;
$new_height = 350;

// Calculate scaling ratio
echo($ratio = $new_height/$height).'<br>';
echo($new_width = round($width * $ratio,-1)).'<br>';
echo($new_width = round($width * $ratio,-2)).'<br>';

function roundNextMultiple($val, $multiple){
    return ceil($val / $multiple) * $multiple;
}

echo roundNextMultiple($width * $ratio, 100).'<br>';
echo roundNextMultiple($width * $ratio, 50).'<br>';
?>