<html lang="en">
    <head>
        <title>switch</title>
    </head>
    <body>
        <?php
        $a = 3;
        switch($a){
            case 0:
                echo " a equals 0<br/>";
                break;
            case 1:
                echo " a equals 1<br/>";
                break;    
            case 2:
                echo " a equals 2<br/>";
                break;
            case 3:
                echo " a equals 3<br/>";
                break;
            default:
                echo " a is not 0, 1, 2, or 3<br/>";
                break;}
        ?>
        <br/>
        <?php // case with multiple values
        $user_type ="customer";
        switch($user_type){
            case 'student':
                echo "Welcome";
                break;
            case 'press':  // PHP doesn't recognize case 'press', 'customer':
            case 'customer': 
                echo "Hello!";
                break;
        }
        ?>

    </body>
</html>