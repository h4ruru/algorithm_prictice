<?php 
$inputFile =  "test.txt";

if (file_exists($inputFile)){
$p = file_get_contents($imputFile);
} else {
    echo "ファイルが存在しません";
}

if ($p !== []){
    $algorithm = "sha256";
    $hash = hash($algorithm, $p);

    echo "p：$p
      <br>hash：$hash
      <br>次の値をファイルに入力してください";
} else {
    echo "ファイルに値を入力してください";
}
?>