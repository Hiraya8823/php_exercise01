<?php

$subjects = ['数学', '英語', '理科', '社会', '国語'];

foreach ($subjects as $subject) {
    switch ($subject) {
        case '数学':
            $date = '明日';
            break;
        case '英語':
            $date = '明後日';
            break;
        case '理科':
            $date = '明々後日';
            break;
        case '数学':
            $date = '昨日';
            break;
        case '数学':
            $date = '中止';
            break;
    }
    echo $subject . 'の試験は' . $date . 'です。' . PHP_EOL;
}

