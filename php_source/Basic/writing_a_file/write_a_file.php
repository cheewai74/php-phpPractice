<?php
$text = file_get_contents('php_source\reading_a_file\YesterdayOnceMore.txt');
echo file_put_contents('php_source\writing_a_file\duplicate.txt', $text, FILE_APPEND)

?>