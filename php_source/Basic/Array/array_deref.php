<?php 

$info = getimagesize('C:\Users\dell\OneDrive\Documents\Git\php-phpPractice\php_source\Basic\Array\pandan.jpg');
print_r($info);

$mime = getimagesize('C:\Users\dell\OneDrive\Documents\Git\php-phpPractice\php_source\Basic\Array\pandan.jpg')['mime'];
echo $mime;

?>