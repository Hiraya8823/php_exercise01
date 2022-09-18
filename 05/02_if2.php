<?php

$poket_money = 1000;
$fund_raising = 101;

echo 'あなたの所持金は' . $poket_money . '円です｡' . PHP_EOL;

do {
    echo "{$poket_money}円募金しました。" . PHP_EOL;
    $poket_money -= $fund_raising;
    echo '残りは' . "$poket_money" . '円です。' . PHP_EOL;
} while ($poket_money > $fund_raising);
echo 'これ以上募金できません。';
