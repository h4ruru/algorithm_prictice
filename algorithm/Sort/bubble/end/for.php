<?php
function bubbleSort($array) {
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                // 隣接する要素が逆の順序になっている場合、交換する
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}

// サンプル配列
$array = [5, 3, 1, 4, 2];
echo "ソート前: " . implode(", ", $array);
$array = bubbleSort($array);
echo "<br>ソート後: " . implode(", ", $array);