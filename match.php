<?php

function add_to_x($x){
    return $x +5;
}

$x = 0;
$result = match($x){
    //-2, -1, 0 => '$x is not positive',
    -2, -1, 0 => add_to_x($x),
    1 => '$x is 1',
    2 => '$x is 2',
    default => '$x is neither 1 nor 2',
};

$result = match(true){
    -2, -1, 0 => '$x is not positive',
    1 => '$x is 1',
    2 => '$x is 2',
    default => '$x is neither 1 nor 2',
};

echo $result
?>