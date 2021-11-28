<html lang="en">
    <head>
        <title>Operator</title>
    </head>
    <body>
        <?php 
        $a = 4;
        $b = 3;
        $c = 20;
        $d = 1;
        if(($a > $b) && ($c > $d)){
            echo "a is larger than b AND ";
            echo "c is larger d";
        }
        ?>
        <br/>
        <?php 
        $a = 4;
        $b = 3;
        $c = 1;
        $d = 20;
        if(($a > $b) || ($c > $d)){
            echo "a is larger than b AND ";
            echo "c is larger d";
        }
        ?>
    </br>
    <?php 
        if(!isset($e)){
            $e= 200;
        }
        echo $e;
    ?>

    </body>
</html>