<html lang="en">
    <head>
        <title>Car Class</title>
    </head>
    <body>
        <?php
            class Car{
                // Class properties and methods goes here.
            public $comp;
            public $color = "beige";
            public $hasSunRoof = true;

            public function hello(){
                return "beep";
            }

            }
            $bmw = new Car();
            $mercedes = new Car();


            echo $bmw -> color;
            echo "<br/>";
            echo $mercedes -> color;
            echo "<br />";
            echo $mercedes -> comp;
            echo "<br />";
            echo $bmw -> hello();
            echo "<br />";
            echo $mercedes -> hello();
            echo "<hr />";

            // Set the values
            $bmw -> color = "Blue";
            $bmw -> comp = "BMW";
            $mercedes -> comp = "Mercedes Benz";

            // Get the values
            echo $bmw -> color;
            echo "<br />";
            echo $bmw -> comp;
            echo "<br />";
            echo $mercedes -> comp;
            echo "<br />"


        ?>
    </body>
</html>