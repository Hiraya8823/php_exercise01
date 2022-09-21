<?php

// 変数を用意
$msg = '';

// methodがPOSTだったら変数に値をセットする
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg = $_POST['message'];
    if (empty($msg)) {
        $err_msg = '年齢を入力してください。';
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
    <h1>POSTメソッド</h1>
    <?php if (!empty($err_msg)): ?>
        <ul>
            <li><?= $err_msg ?></li>
        </ul>
    <?php endif; ?>
    <form action="" method="post">
        <div>
            <label for="">年齢</label>
            <br>
            <input type="text" name="message">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <?php if (!empty($msg)): ?>
        <p>私は<?= htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') ?>歳です</p>
    <?php endif; ?>
</body>

</html>
