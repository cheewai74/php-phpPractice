<?php
    function inverse($x){
        if(!$x){
            throw new Exception("Divison by zero.");
        }
        return 1/$x;
    }

    try{
        echo inverse(5) . "\n";
        //echo inverse(0) . "\n";
    }
    catch (Exception $e){
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }
    finally{
        echo "First finally. \n";
    }

    try{
        //echo inverse(5) . "\n";
        echo inverse(0) . "\n";
    }
    catch (Exception $e){
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }
    finally{
        echo "Second finally. \n";
    }


?>
