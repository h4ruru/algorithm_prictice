<?php 

function heapSort(&$arr){
    $n = count($arr);

    buildHeap($arr, $n);

    for ($i = $n - 1; $i >= 0; $i--){

        swap($arr[0], $arr[$i]);
        heapify($arr, $i, 0);
    }
}

function buldHeap(&$arr, $n){
    for ($i = ($n / 2) - 1; $i >= 0; $i--){
        heapify($arr, $n, $i);
    }
}

function heapify(&$arr, $n, $i){
    $largest = $i;
    $left  = 2 * $i + 1;
    $right = 2 * $i + 2;

    if ($left < $n && $arr[$left] > $arr[$largest]){
        $largest = $left;
    }

    if ($right < $n && $arr[$right] > $arr[$largest]){
        $largest = $right;
    }

    if ($largest != $i){
        swap($i, $largest);
        heapify($arr, $n, $largest);
    }
}

function swap(&$a, &$b){
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$array = [12, 11, 13, 5, 6, 7];

echo "ソート前：" . implode($array) . "<br>";
heapSort($array);
echo "ソート後：" . implode($array);
?>