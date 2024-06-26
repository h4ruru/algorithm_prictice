<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI計算機</title>
</head>
<body>
    <h1>BMI計算機</h1>
    <form action="bmi.php" method="post">
        <label for="height">身長（cm）:</label>
        <input type="number" id="height" name="height" step="0.1" required>
        <br><br>
        <label for="weight">体重（kg）:</label>
        <input type="number" id="weight" name="weight" step="0.1" required>
        <br><br>
        <input type="submit" value="BMIを計算する">
    </form>
</body>
</html>
