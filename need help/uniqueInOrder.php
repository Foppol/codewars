<?php

//Unique in order

function uniqueInOrder($iterable){
    if (is_string($iterable)){
        $arr = str_split($iterable);
    }    
    elseif (is_array($iterable)){
        if(!empty($iterable)) {
            $arr = $iterable;
        }
        else {
            return ;
        }
    }
    elseif(is_numeric($iterable)){
        $arr = $iterable;
    }
    for ($i = 0; $i < count($arr); $i++) {
        if (!empty($ret)) {
            if ($arr[$i] !== $arr[$i-1] ){
                array_push($ret, $arr[$i]);            
            }
        }
         elseif (!empty($arr)) {
            $ret = array();
            array_push($ret, $arr[$i]);           
        }
    }
    return $ret;
}

//print_r (uniqueInOrder(11111112222333213123423));
//print_r (uniqueInOrder('AAABBBAABB'));
print_r (uniqueInOrder(array()));
//print_r (uniqueInOrder(1,1,1,1,1,1,1,2,2,2,2,3,3,3,2,1,3,1));


