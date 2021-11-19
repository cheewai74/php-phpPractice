<html lang="en">
    <head>
        <title>Logical</title>
    </head>
    <body>
        <?php 
        $a = 4;
        $b = 3;

        if ($a > $b){
            echo "a is larger than b";
        }elseif ($a <$b){
            echo "b is larger than a";
        }
        else{
            echo "a is equal to b";
        }
        ?>
        </b> 
        <?php // Only welcome new users
        $new_user = true;
        if($new_user){
            echo "<h1>Welcome!</h>";
            echo "<p>We are glad you decided to join us.</p>";
        }
        ?>
        <br />
        <?php // don't divide by zero
            $numerator = 20;
            $denominator = 4;
            if ($denominator > 0){
                $result = $numerator / $denominator;
                echo "Result: {$result}";
            }
        ?>



    </body>
</html>