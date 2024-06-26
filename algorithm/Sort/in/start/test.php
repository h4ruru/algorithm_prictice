<?php

function insertionSort(&$arr){
    $n = count($arr);
    
    for ($i = 1; $i <= $n; $i++){
        $key = $arr[$i];
        $j = $i - 1;

        while ($j >= 0 && $arr[$j] > $key){
            $arr[$j + 1] =$arr[$j];
            $j = $j - 1; 
        }

        $arr[$j + 1] = $key;
    }
}

$input = readline("複数の値を,で区切って入力してください。<br>");
$arr = explode(", ", $input);

echo "ソート前：" . implode(", ", $arr);
insertionSort($arr);
echo "ソート後：" . implode(", ", $arr);
?>