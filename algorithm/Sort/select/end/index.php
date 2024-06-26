<?php
// 選択ソートを行う関数
function selectionSort(&$arr) {
    $n = count($arr);
    
    // 未整列部分の先頭から末尾までループ
    for ($i = 0; $i < $n - 1; $i++) {
        // 未整列部分から最小値の位置を見つける
        $min_index = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$min_index]) {
                $min_index = $j;
            }
        }
        
        // 最小値の位置と未整列部分の先頭を交換
        $temp = $arr[$i];
        $arr[$i] = $arr[$min_index];
        $arr[$min_index] = $temp;
    }
}

// テスト用の配列
$arr = [5, 64, 3, 7, 1, 362, 2, 4, 54];

//標準入力の場合
//$input = readline("複数の値を入力してください（値はコンマで区切ってください）:");
//$arr = explode(", ",$input);

// ソート前の配列を表示
echo "ソート前: " . implode(", ", $arr);

// 選択ソートを適用
selectionSort($arr);

// ソート後の配列を表示
echo "<br>ソート後:" . implode(", ", $arr);

?>