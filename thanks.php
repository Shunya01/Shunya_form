<?php

$nickname=$_POST['nickname'];
$email=$_POST['email'];
$content=$_POST['content'];
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>送信完了</title>
    </head>
    <body>
        <h1>お問い合わせありがとうございました！</h1>
        <p><?php echo $nickname ?></p>
        <p><?php echo $email ?></p>
        <p><?php echo $content ?></p>
    </body>



</html>