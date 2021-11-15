<?php
$colors = array('red', 'blue', 'green', 'yellow');

for($i = 0; $i < sizeof($colors); $i++){
    echo '<p>' . $colors[$i] . '</p>';
}

foreach($colors as $color){
    echo "<p>$color</p>";
}

$home_towns = array(
    'Joe' => 'Middletown, NY',
    'Erin' => 'West Chester, PA',
    'Dave' => 'Exton, PA',
    'Brian' => 'Grand Rapids, MI'
);

foreach($home_towns as $name => $town){
    echo "<p>$name lives in $town</p>";
}
?>