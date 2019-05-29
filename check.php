<?php
$nickname=$_POST['nickname'];
$email=$_POST['email'];
$content=$_POST['content'];
//スーパーグローバル関数
// echo $nickname;

if ($nickname == '') {
        $nickname_result = 'ニックネームが入力されてません。';
    } else {
        $nickname_result = 'ようこそ、' . $nickname . '様';
    }

    if ($email == '') {
        $email_result = 'メールアドレスが入力されてません。';
    } else {
        $email_result = 'メールアドレス:' . $email;
    }

    if ($content == '') {
        $content_result = 'お問い合わせ内容が入力されてません。';
    } else {
        $content_result = 'お問い合わせ内容:' . $content;
    }

?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>入力内容確認</title>
    </head>
    <body>
        <h1>入力内容確認</h1>
        <p><?php echo $nickname ?></p>
        <p><?php echo $email ?></p>
        <p><?php echo $content ?></p>
    </body>

</html>