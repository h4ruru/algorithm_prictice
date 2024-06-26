<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI計算結果</title>
</head>
<body>
    <h1>BMI計算結果</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // フォームから送信されたデータを取得
        $height = $_POST["height"];
        $weight = $_POST["weight"];

        // 入力が正しいかどうか確認
        if (is_numeric($height) && is_numeric($weight) && $height > 0 && $weight > 0) {
            // 身長をメートルに変換
            $heightInMeters = $height / 100;

            // BMIを計算
            $bmi = $weight / ($heightInMeters * $heightInMeters);

            // 結果を表示
            echo "<h2>あなたのBMIは: " . round($bmi, 2) . "です</h2>";
        } else {
            echo "<h2>入力が無効です。正しい値を入力してください。</h2>";
        }
    } else {
        echo "<h2>無効なリクエストです。</h2>";
    }
    ?>
    <br>
    <a href="/algorithm/BMI/input">もう一度計算する</a>
</body>
</html>
