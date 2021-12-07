<?php

// The PHP $_REQUEST variable contains the contents of both $GET, $POST, and $_COOKIE 
// The PHP $_REQUEST variable can be used to get the result from form data sent with both the GET 
// and POST methods.

if($_REQUEST["username"] && $_REQUEST["pass"])
{
    echo "Name " .$_REQUEST['username']. "<br />";
    echo "Password is " .$_REQUEST['pass'];
    exit();
}

?>

<html lang="en">
    <head>
        <title>REQUEST Example</title>
    </head>
    <body>
        <form method="GET">
            User Name: <input type ="text" name ="username" />
            Password: <input type = "password" name = "pass" />
            <input type ="submit" value="Login" />
        </form>
    </body>
</html>