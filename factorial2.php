<?php

function factorial($n){

    if ($n == 0){
        return 1;
        // echo "a";
    }else{
        
        $res = $n * factorial($n - 1);
    }


    return $res;

}


echo factorial(2); 
