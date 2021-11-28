<?php
function pre_print($var){
    echo '<prev>';
    print_r($var);
    echo '</prev>';
}

function para_print($var){
    echo "<p>$var</p>";
}