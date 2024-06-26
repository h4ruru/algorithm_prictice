<?php
// 挿入ソートを行う関数
function insertionSort(&$arr) {
    $n = count($arr);
    for ($i = 1; $i <= $n; $i++) {
        $key = $arr[$i];
        $j = $i - 1;
        // $keyより大きな要素を後ろにずらす
        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j = $j - 1;
        }
        $arr[$j + 1] = $key;
    }
}

// ソート前の配列
$unsortedArray = [5, 2, 8, 3, 9, 1];
echo "ソート前の配列: " . implode(", ", $unsortedArray) . "<br>";

// 配列をソートする
insertionSort($unsortedArray);

// ソート後の配列
echo "ソート後の配列: " . implode(", ", $unsortedArray);
?>