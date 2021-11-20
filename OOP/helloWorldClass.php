<html lang="en">
    <head>
        <title>Hello world class</title>
    </head>
    <body>
        <?php
            class className{
                // Class properties and methods goes here.
            public $msg = "Hello Word, I'm inside the class.";

            }
            $obj = new className;
            echo $obj->msg;
        ?>
    </body>
</html>