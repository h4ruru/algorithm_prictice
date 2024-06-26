<?php

echo "数字を入力してください<br>";
$input = trim(fgets(STDIN));


for ($i = 0; $i <= $input; $i++){
    if (!is_numeric($input)){
        echo "有効な数字を入力してください";
    } elseif ($i % 3 == 0 && $i % 5 == 0){
        echo "$i:FizzBuzz, ";
    } elseif ($i % 3 == 0){
        echo "$i:Fizz, ";
    } elseif ($i % 5 == 0){
        echo "$i:Buzz, ";
    }
}

if (is_numeric($input)){
    echo "<br>入力値：$input";
}
?>