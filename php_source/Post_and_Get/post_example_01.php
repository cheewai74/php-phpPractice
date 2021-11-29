<?php
/*
 The PHP provide $_POST associative array to access all the send 
 information using POST method
*/
if($_POST["username"] && $_POST["pass"])
{
    echo "Name " . $_POST['username'] . "<br />";
    echo "Password is " . $_POST['pass'];
    exit();
}
?>
<html lang="en">
    <head>
        <title>Post Example</title>
    </head>
    <body>
        <form method="POST">
            User Name: <input type ="text" name ="username" />
            Password: <input type = "password" name = "pass" />
            <input type ="submit" value="Login" />
        </form>

    </body>
</html>