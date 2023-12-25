<?php 
$info = getimagesize('php_source\Basic\Array\pandan.jpg');
print_r($info);

$mime = getimagesize('php_source\Basic\Array\pandan.jpg')['mime'];
echo $mime;

?>