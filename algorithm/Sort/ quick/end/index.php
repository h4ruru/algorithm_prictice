<?php

// クイックソート関数
function quickSort(&$array) {
    $length = count($array);
    if ($length <= 1) {
        return;
    }
    $pivot = $array[0];
    $left = $right = [];
    
    // ピボットを中心に配列を分割
    for ($i = 1; $i < $length; $i++) {
        if ($array[$i] < $pivot) {
            $left[] = $array[$i];
        } else {
            $right[] = $array[$i];
        }
    }
    
    // 左右の部分配列に再帰的にクイックソートを適用
    quickSort($left);
    quickSort($right);
    
    // 左部分配列、ピボット、右部分配列を結合
    $array = array_merge($left, [$pivot], $right);
}

// ソートされる前の配列
$array = [3, 6, 8, 10, 4, 2, 1, 14, 9, 5];
echo "ソート前: " . implode(", ", $array);

// クイックソートを実行
quickSort($array);

// ソートされた後の配列
echo "<br>ソート後: " . implode(", ", $array);
?>