<?php
echo "数字を入力してください</br>";

$input = trim(fgets(STDIN));

if (!is_numeric($input)){
    echo "有効な数字を入力してください";
} elseif ($input % 3 == 0 && $input % 5 == 0){
    echo "3, 5：FizzBuzz";
} elseif ($input % 3 == 0){
    echo "3：Fizz";
} elseif ($input % 5 == 0){
    echo "5：Buzz";
}

if (is_numeric($input)){
echo "<br>入力値：$input";
}
?>