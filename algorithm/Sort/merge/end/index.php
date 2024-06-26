<?php

// 2つのソート済み配列をマージして1つのソート済み配列を生成する関数
function merge($left, $right) {
    $result = [];
    $leftIndex = $rightIndex = 0;

    // 左右の配列が空になるまで比較・マージを繰り返す
    while ($leftIndex < count($left) && $rightIndex < count($right)) {
        if ($left[$leftIndex] < $right[$rightIndex]) {
            $result[] = $left[$leftIndex];
            $leftIndex++;
        } else {
            $result[] = $right[$rightIndex];
            $rightIndex++;
        }
    }

    // どちらかの配列が残っている場合、結果に追加する
    while ($leftIndex < count($left)) {
        $result[] = $left[$leftIndex];
        $leftIndex++;
    }
    while ($rightIndex < count($right)) {
        $result[] = $right[$rightIndex];
        $rightIndex++;
    }

    return $result;
}

// マージソートを行う関数
function mergeSort(&$arr) {
    // 配列の要素数が1以下の場合はそのまま返す
    if (count($arr) <= 1) {
        return $arr;
    }

    // 配列を中央で分割
    $middle = (int) (count($arr) / 2);
    $left = array_slice($arr, 0, $middle);
    $right = array_slice($arr, $middle);

    // 再帰的に分割し、マージ
    mergeSort($left);
    mergeSort($right);

    // ソートされた配列をマージして元の配列に反映
    $arr = merge($left, $right);
}

// テスト用の配列
$arr = [5, 64, 3, 7, 1, 362, 2, 4, 54];

// ソート前の配列を出力
echo "ソート前: " . implode(", ", $arr) . "<br>";

// マージソートを実行
mergeSort($arr);

// ソート後の配列を出力
echo "ソート後: " . implode(", ", $arr) . "<br>";