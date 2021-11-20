<html lang="en">
    <head>
        <title>For Loop</title>
    </head>
    <body>
        <?php // for loop example
            for($count = 0; $count <= 10; $count++){
                echo $count . ",";
            }
        ?>
        <br />
        <?php // foreach example
            $ages = array(4,8,15,16,23,42);
            foreach($ages as $age){
                echo "Age: {$age}<br />";
            }
        ?>
        <br />
        <?php // foreach using associative array

        $person = array(
            "first name" => "Tim",
            "last name" => "Ho",
            "address" => "Toa Payoh 123",
            "city" => "Singapore",
            "state" => "None",
            "postal_code" => "120455"
        );

        foreach($person as $attribute =>$data){
            $attr_nice = ucwords(str_replace("_"," ",$attribute));
            echo "{$attr_nice}: {$data}<br />";
        }
        ?>
        <br />
        <?php 
        $prices = array("Brand New Computer" => 2000,
                        "1 month of Lynda.com" => 25,
                        "Learning PHP" => null);
        foreach($prices as $item => $prices){
            echo "{$item}: ";
            if (is_int($prices)){
                echo "$" . $prices;
            }
            else{
                echo "priceless";
            }
            echo "<br />";
        }
        ?>

    </body>
</html>