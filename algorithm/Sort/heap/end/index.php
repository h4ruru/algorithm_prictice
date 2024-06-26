<?php

// ヒープソート関数
function heapSort(&$arr) {
    $n = count($arr);
    
    // ヒープを構築
    buildHeap($arr, $n);
    
    // ヒープから要素を1つずつ取り出し、ソートする
    for ($i = $n - 1; $i >= 0; $i--) {
        // 最大値を最後の要素と交換
        swap($arr[0], $arr[$i]);
        
        // ヒープの再構築
        heapify($arr, $i, 0);
    }
}

// ヒープを構築する関数
function buildHeap(&$arr, $n) {
    // 最後の非葉ノードから始める
    for ($i = ($n / 2) - 1; $i >= 0; $i--) {
        heapify($arr, $n, $i);
    }
}

// ヒープを再構築する関数
function heapify(&$arr, $n, $i) {
    $largest = $i; // 親ノード
    $left = 2 * $i + 1; // 左の子ノード
    $right = 2 * $i + 2; // 右の子ノード
    
    // 左の子ノードが親ノードより大きい場合
    if ($left < $n && $arr[$left] > $arr[$largest]) {
        $largest = $left;
    }
    
    // 右の子ノードが親ノードより大きい場合
    if ($right < $n && $arr[$right] > $arr[$largest]) {
        $largest = $right;
    }
    
    // 親ノードが最大値でない場合、交換して再帰的にヒープを構築
    if ($largest != $i) {
        swap($arr[$i], $arr[$largest]);
        heapify($arr, $n, $largest);
    }
}

// 2つの要素を交換する関数
function swap(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

// ソート前の配列
$originalArray = [12, 11, 13, 5, 6, 7];
echo "ソート前の配列:" . implode(", ", $originalArray) ."<br>";

// ヒープソート
heapSort($originalArray);

// ソート後の配列
echo "ソート後の配列:" . implode(", ", $originalArray);

?>