<?php
include "Stack.php";

$array = [1,2,3,4,5,6,7,8,9];

$stack = new Stacks(9);
try {
    foreach ($array as $item){
        $stack->push($item);
    }
    foreach ($array as $key => $item){
        $arrayInt[$key] = $stack->pop();
    }
    echo implode(',' , $arrayInt);
}catch (Exception $exception){
    echo $exception->getMessage();
}