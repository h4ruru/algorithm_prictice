<?php 
$p = trim(fgets(STDIN));

if (!empty($p)){

    $algorithm = "sha256";
    $hash = hash($algorithm, $p);

    echo "p：$p
        <br>hash：$hash
        <br>次の値を入力してください。"; 

} else {
    echo "値を入力してください";
}
?>