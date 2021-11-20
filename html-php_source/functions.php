<html lang="en">
    <head>
        <title>functions</title>
    </head>
    <body>
        <?php
        function say_hello(){
            echo "Hello World!<br />";
        }

        say_hello();

        function say_hello_to($word){
            echo "Hello {$word}! <br />";
        }

        say_hello_to("Ken");

        function add($val1, $val2){
            $sum = $val1 + $val2;
            return $sum;
        }

        echo $sum = add(3,4);

        function add_subt($val1, $val2){
            $sum = $val1 + $val2;
            $subt = $val1 - $val2;
            return array($sum, $subt);
        }

        $result = add_subt(10,5);
        echo "Add: " .$result[0] . "<br />";
        echo "Sub: " .$result[1] . "<br />";


        list($add_result, $sub_result) = add_subt(20,7);
        echo "Add: " .$add_result . "<br />";
        echo "Sub: " .$sub_result . "<br />";
        ?>

    </body>
</html>