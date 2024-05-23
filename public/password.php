<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>パスワードの練習(送信後)</title>
</head>

<body>
    <h4>0J01005 大西健介</h4>

    <?php
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    ?>

    <p>入力されたユーザーIDは、<?php echo $user; ?>です。</p>
    <p>入力されたパスワードは、<?php echo $pass; ?>です。</p>
    <button onclick="history.back()">戻る</button>
</body>

</html>
