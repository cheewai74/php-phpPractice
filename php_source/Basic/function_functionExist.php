<?php
    function tagWrap($tag, $txt, $func=""){
        if((!empty($txt)) && (function_exists($func))){
            $txt = $func($txt);
            return "<".$tag.">".$txt."</".$tag."><br/>";
        }
        else{
            return "<b>".$txt."</b><br/>";
        }
    }

    function underline($txt){
        return "<span style=\"text-decoration:underline;\">".$txt."</span>";
    }

    echo tagWrap('b','make me bold');
    echo tagWrap('i','underline me too',"underline");
    
    // ---- create_function has been deprecated -------
    //echo tagWrap('i', 'make me italic and quote me ', 
    //create_function('$txt', 'return "&quot;$txt&quot;";'));

    // $func = function(string $txt) {
    //     return "&quot;$txt&quot;";
    // };

    // $newfunc = function($a, $b) {
    //     return "ln($a) + ln($b) = " . log($a * $b);
    // };
    
    // echo $newfunc(2, M_E) . "\n";


    $func = function (string $txt) { return "&quot;$txt&quot;";};
    echo $func('i','make me italic and quote me') . "\n";

    echo tagWrap('i', 'make me italic and quote me ', $func);
    // $func = function (int $x, int $y) {
    //     return $x * $y;
    // };
?>