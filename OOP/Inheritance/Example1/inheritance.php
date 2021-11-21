<html lang="en">
    <head>
        <title>Inheritance</title>
    </head>
    <body>
        <?php
            class person{
    
                function personMeth($name, $address, $mobNo){
                    $this -> name = $name;
                    $this -> address = $address;
                    $this -> mobNo = $mobNo;
                }
            }

            class customer extends person{

                function setCustomerNo($customerNo){
                    $this -> customerNo = $customerNo;
                }

                function showMeth(){
                    echo "Customer Number: " .$this -> customerNo;
                    echo "<br />";
                    echo "Customer Name: " .$this -> name;
                    echo "<br />";
                    echo "Customer Address: " .$this -> address;
                    echo "<br />";
                    echo "Customer Mobile Number: " .$this -> mobNo;
                    echo "<br />";
                    echo "<hr />";
                }
            }

            $obj = new customer;
            $obj->setCustomerNo(3342);
            $obj->personMeth("ABC","Jamshoro","+123456788**");
            $obj->showMeth();
        ?>
    </body>
</html>