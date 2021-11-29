<html lang="en">
    <head>
        <title>PHP MYSQL Example</title>
    </head>
    <body>
        <?php
            $db = mysqli_connect('localhost','root','','records') or die("Error Connecting to MySQL with Server");
        ?>

        <h3>Successfully Connected</h3>
    </body>
</html>
