<html lang="en">
    <head>
        <title>Class Example 1</title>
    </head>
    <body>
        <?php
            class Student{
                
            }

            $class_names = ['Product', 'Student', 'student'];
            foreach($class_names as $class_name){
                if(class_exists($class_name)){
                    echo "{$class_name} is a declared class. <br />";
                }
                else{
                    echo "{$class_name} is not a declared class. <br />";
                }
            }

           
            $obj = new className;
            echo $obj->msg;
        ?>
    </body>
</html>