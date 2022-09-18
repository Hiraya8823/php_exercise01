<?php 

echo '$aの値を入力してください: ';
$a = trim(fgets(STDIN));

echo '$bの値を入力してください: ';
$b = trim(fgets(STDIN));

if ($a > $b) {
    echo "$a";
} elseif ($a < $b){
    echo "$b";
} elseif ($a == $b){
    echo '入力された値は等しいです';
};



