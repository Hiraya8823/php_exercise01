<?php

$msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg = $_POST['message'];
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p>私の名前は<?= htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') ?>です。</p>
    <a href="02_form.php">戻る</a>
</body>
</html>
