<?php

// 変数を用意
$age = '';
$err_msg = '';
$sum = '';

// methodがPOSTだったら変数に値をセットする
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    if (is_numeric($num1) && is_numeric($num2) && is_numeric($num3)) {
        $sum = $num1 + $num2 + $num3 ;
    }else {
        $err_msg = '全てに数字を入力してください';
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォームの作成課題</title>
</head>

<body>
    <h1>数字を入力してください</h1>
    <?php if (!empty($err_msg)): ?>
        <ul>
            <li><?= $err_msg ?></li>
        </ul>
    <?php endif; ?>
    <form action="" method="post">
        <div>
            <label for="">１つめの数字</label>
            <br>
            <input type="number" name="num1">
        </div>
        <div>
            <label for="">2つめの数字</label>
            <br>
            <input type="number" name="num2">
        </div>
        <div>
            <label for="">3つめの数字</label>
            <br>
            <input type="number" name="num3">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <?php if ($sum): ?>
        <p>合計値は<?= htmlspecialchars($sum, ENT_QUOTES, 'UTF-8') ?>です。</p>
    <?php endif; ?>
</body>

</html>
