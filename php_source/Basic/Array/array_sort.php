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

function mysort1($x,$y){
    return ($x['Key1'] > $y['Key1']);
}

convert_multi_array($a);

// The usort function sorts by values and does not maintain the keys.
usort($a, 'mysort1');

function mysort2($x,$y){
    return strcasecmp($x['Key2'] , $y['Key2']);
}

// uasort, the keys would be maintained
// uksort, the sort would be based upon the keys
usort($a, 'mysort2');

?>