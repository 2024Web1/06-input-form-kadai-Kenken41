<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>テキストエリア練習問題(結果)</title>
</head>
<body>
    <h4>テキストエリア練習課題</h4>
    <?php
        if (isset($_POST['input_text'])) {
            $input_text = htmlspecialchars($_POST['input_text'], ENT_QUOTES, 'UTF-8');
            echo "<p>入力された文章は、つぎのとおりです。</p>";
            echo "<p>{$input_text}</p>";
        } else {
            echo "<p>テキストが入力されていません。</p>";
        }
    ?>
    <button class="underline-button" onclick="history.back()">戻る</button>
</body>
</html>
