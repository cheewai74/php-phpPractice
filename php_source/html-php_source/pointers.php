<html lang="en">
    <head>
        <title>Pointers Array</title>
    </head>
    <body>
        <?php 
        $ages = array(4,6,15,16,23,42);

        // current: current pointer value
        echo "1: " . current($ages) . "<br />";

        // next: move the pointer forware
        // similar to using 'continue' inside a loop

        next($ages);
        echo "2: " . current($ages) . "<br />";
        next($ages);
        next($ages);
        echo "3: " . current($ages) . "<br />";
        ?>

    </body>
</html>