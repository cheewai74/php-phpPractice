<?php
$is_logged_in = true;
$message = $is_logged_in ? "Welcome back!": "Hello There";
echo $message;

$is_logged_in = false;
$message = "Welcome" . ($is_logged_in ? " back!" : "!");
echo $message;

$is_logged_in = true;
$message = "Welcome" . ($is_logged_in ? " back!" : "!");
echo $message;

$name = isset($name) ? $name : 'Joe';
echo $name;

?>