<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location:index.html');
}

//関数の呼び出し
require_once('function.php');

$nickname=h($_POST['nickname']);
$email=h($_POST['email']);
$content=h($_POST['content']);

//DBとの接続
require_once('dbconnect.php');
$stmt = $dbh->prepare('INSERT INTO surveys (nickname,email,content) VALUES(?,?,?)');
$stmt->execute([$nickname,$email,$content]);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>送信完了</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>

    <div class="container">

        <div class="row">
            <h1 class="jumbotron text-center bg-info col-12">お問い合わせありがとうございました！</h1>
        </div>
        <div class="card">
            <div class="row">
              <div class="card-header bg-success col-12">
                <h3>以下の内容でお問い合わせを受け付けました。</h3>
            </div>
        </div>

        <div class="row">
            <div class="card-body bg-warning col-12">
                <blockquote class="blockquote ">
                  <p><?php echo "ニックネーム：".$nickname ?></p>
                  <p><?php echo "メールアドレス:".$email ?></p>
                  <p><?php echo "お問い合わせ：".$content ?></p>
              </blockquote>
          </div>
      </div>

  </div>

  <div class="row">
    <a href="index.html" class="mt-4">お問い合わせ受け付けページに戻る</a>
</div>


</div>
</body>



</html>