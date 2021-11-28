<html lang="en">
    <head>
        <title>Defining Class Methods</title>
    </head>
    <body>
        <?php
            class test{

                // OOP allows obj to reference themselves using $this. When working within a
                // method, use $this in the same way you would use the obj name outside the class.

                function setMeth($name, $age, $salary){
                    $this -> name = $name;
                    $this -> age = $age;
                    $this -> salary = $salary;
                }

                function getMeth(){
                    echo "My name is : ".$this -> name;
                    echo "<br />";
                    echo "Age: " .$this -> age;
                    echo "<br />";
                    echo "Salary is " .$this -> salary;
                    echo "<hr />";

                }
            }

            $obj = new test;
            echo $obj->setMeth("Tommy", 44, 500000);
            $obj ->getMeth();
            echo $obj->setMeth("Phonix", 56, 800000);
            $obj ->getMeth();
        ?>
    </body>
</html>