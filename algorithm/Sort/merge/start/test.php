<?php 

function merge($left, $right) {
    $result = [];
    $leftIndex = $rightIndex = 0;

    while ($leftIndex < count($left) && $rightIndex < count($right)){
        if ($left[$leftIndex] < $right[$rightIndex]){
            $result[] = $left[$leftIndex];
            $leftIndex++;
        } else {
            $result[] = $right[$rightIndex];
            $rightIndex++;
        }
    }

    while ($leftIndex < count($left)){
        $result[] = $left[$leftIndex];
        $rightIndex++;
    }
    while ($rightIndex < count($right)){
        $result[] = $right[$rightIndex];
        $rightIndex++;
    }

    return $result;
}

function margeDort(&$arr){

    if (count($arr) <= 1){
        return $arr;
    }

    $middle = (int) (count($arr) / 2);
    $left = array_slice($arr, 0, $middle);
    $right = array_slice($arr, $middle);

    mergeSort($left);
    mergeSort($right);

    $arr = merge($left, $right);
}
?>