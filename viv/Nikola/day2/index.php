<?php 
// echo rand(5,500) ;

function getMin ($arr){
    $min= $arr[0];
    $minIndex = 0;
    foreach($arr as $index => $element){
        if ($element < $min ){
            $min =$element;
            $minIndex= $index;
        }
    }
    return $minIndex;
}

echo getMin ([1,2,3,5,6,-1,5]) ;