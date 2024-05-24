<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プルダウンの練習</title>
</head>
    <body>
        <?php
            $fruit = $_POST['fruit'];
        ?>
        <p>あなたの好きなフルーツは、<?php echo $fruit; ?>ですね。</p>
        <button class="underline-button" onclick="history.back()">戻る</button>
    </body>
</html>
