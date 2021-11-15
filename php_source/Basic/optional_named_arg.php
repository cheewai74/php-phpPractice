<?php

function multiplier($a, $multiplier=2){
    return $a * $multiplier;
}

function math($a, $b = 2, $op = 'multiply'){
    if('add' == $op){
        return $a + $b;
    } else if('sub' == $op){
        return $a - $b;
    } else if ('divide' == $op){
        return $a / $b;
    }

    return $a * $b;
}

echo multiplier(4,4);

echo math(4, 3);
echo math(4, 2, 'add');

?>