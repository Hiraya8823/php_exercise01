<?php

echo '$numの値を入力して下さい: ';
$num = trim(fgets(STDIN));

$judge = True;

if ($num == 1) {
    $judge = False;
}

for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        $judge = False;
        break;
    }
}

if ($judge) {
    echo $num . 'は素数です。';
} else {
    echo $num . 'は素数ではありません。';
}
