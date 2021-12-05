<?php

// GET can' be used to sent binary data, like images or word documents, to the server.
// The data send by GET method can be accessed using QUERY_STRING environment variable
// The PHP provides $_GET associative array to access all the sent info using GET mehtod.

if($_GET["username"] && $_GET["pass"])
{
    echo "Name " .$_GET['username']. "<br />";
    echo "Password is " .$_GET['pass'];
    exit();
}

?>

<html lang="en">
    <head>
        <title>Get Example</title>
    </head>
    <body>
        <form method="GET">
            User Name: <input type ="text" name ="username" />
            Password: <input type = "password" name = "pass" />
            <input type ="submit" value="Login" />
        </form>
    </body>
</html>