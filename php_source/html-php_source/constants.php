<html lang="en">
    <head>
        <title>Constants</title>
    </head>
    <body>
        <?php // Can't change the value, can't even redefine.
            $max_width = 980;

            define("MAX_WIDTH", 980);
            echo MAX_WIDTH;

            // MAX_WIDTH = MAX_WIDTH +1;
            echo MAX_WIDTH;
        ?>
        <br/>

    </body>
</html>