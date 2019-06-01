<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location:index.html');
}

//関数の呼び出し
require_once('function.php');


$nickname= h($_POST['nickname']);
$email=h($_POST['email']);
$content=h($_POST['content']);
//スーパーグローバル関数
// echo $nickname;

if ($nickname == '') {
    $nickname_result = 'ニックネームが入力されてません。';
} else {
    $nickname_result = 'ニックネーム: ' . $nickname . ' 様';
}

if ($email == '') {
    $email_result = 'メールアドレスが入力されてません。';
} else {
    $email_result = 'メールアドレス: ' . $email;
}

if ($content == '') {
    $content_result = 'お問い合わせ内容が入力されてません。';
} else {
    $content_result = 'お問い合わせ内容: ' . $content;
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>入力内容確認</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>

    <div class="container">

        <div class="row">
          <h1 class="jumbotron text-center bg-info col-12">お問い合わせ内容を確認してください</h1>
      </div>

      <div class="card">
        <div class="row">
          <div class="card-header bg-success col-12">
            <h3>入力内容確認画面</h3>
        </div>
    </div>

    <div class="row">
        <div class="card-body bg-warning">
            <blockquote class="blockquote mb-0">
              <p><?php echo $nickname_result ?></p>
              <p><?php echo $email_result ?></p>
              <p><?php echo $content_result ?></p>
          </blockquote>
      </div>
  </div>

</div>

<form method="POST" action="thanks.php">
    <input type="hidden" name="nickname" value="<?php echo $nickname?>">
    <input type="hidden" name="email" value="<?php echo $email?>">
    <input type="hidden" name="content" value="<?php echo $content?>">

    <div class="row">
        <input type="button" value="戻る" onclick="history.back()" class="btn-primary btn-lg ml-5 mt-3 center-block col-2">
        <?php if ($email !='' && $nickname != '' && $content!=''):
            ///コロン構文    ?>

            <input type="submit" value="送信" class="btn-primary btn-lg ml-5 mt-3 col-2">
        <?php endif;?> 
    </div>

</form>

</div>

</body>

</html>