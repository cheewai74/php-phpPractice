<html lang="en">
    <head>
        <title>while loop</title>
    </head>
    <body>
        <?php
        $count = 0;
        while ($count <= 10){
            echo $count . ",";
            $count++;
        }
        echo "<br />";
        echo "Count: {$count}";

        ?>
    </body>
</html>