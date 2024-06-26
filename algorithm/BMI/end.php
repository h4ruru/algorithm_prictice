<?php
// 標準入力から身長と体重を取得
echo "身長（cm）を入力してください: ";
$height = trim(fgets(STDIN));

echo "体重（kg）を入力してください: ";
$weight = trim(fgets(STDIN));

// 身長をメートルに変換
$heightInMeters = $height / 100;

// BMIを計算
$bmi = $weight / ($heightInMeters * $heightInMeters);

// BMIを表示
echo "あなたのBMIは: " . round($bmi, 2) . "です\n";
?>
