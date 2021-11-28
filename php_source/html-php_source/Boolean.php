<html lang="en">
    <head>
        <title>Booleans</title>
    </head>
    <body>
        <?php
        $results1 = true;
        $results2 = false;
        ?>
        Results1: <?php echo $results1; ?><br/>
        Results2: <?php echo $results2; ?><br/>
        results2 is  boolean? <?php echo is_bool($results2); ?>
        <br/>
        <?php
        $number = 3.14;
        if(is_float($number)){
            echo "It is a float.";
        }
        ?>
    </body>
</html>