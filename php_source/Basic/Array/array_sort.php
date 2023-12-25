<?php
$a = array(
    array('Key1' => 940, 'Key2' => 'blah'),
    array('Key1' => 23, 'Key2' => 'this'),
    array('Key1' => 894, 'Key2' => 'that'),
);

function convert_multi_array($array) {

    // https://www.freecodecamp.org/news/php-implode-convert-array-to-string-with-join/
    // implode(" ", $array);
    // Convert array to string.

    $out = implode('<br>',array_map(function($a) {return implode("~",$a);},$array));
    print_r($out);
};

convert_multi_array($a);
?>