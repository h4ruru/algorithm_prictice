<?php

$inputFile = "test.txt";

if (!file_exists($inputFile)){
    die("ファイルが存在しません");
}

$p = file_get_contents($inputFile);

$algorithm = "sha256";

if (!$p == []){

    $hash = hash($algorithm, $p);

    echo "p:$p<br>hash:$hash";
    echo "<br>次の値をファイルに入力してください。";

} else {
    echo "ファイルに値を入力してください。";
}