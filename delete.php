<?php

require_once ('function.php');
require_once ('dbconnect.php');

$id = $_POST['id'];
$nickname = $_POST['nickname'];
$email = $_POST['email'];
$content = $_POST['content'];

$stmt = $dbh->prepare('DELETE FROM `surveys` WHERE id=?');
$stmt->execute(["$id"]);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>削除確認画面</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div class="container">

        <div class="row">
          <h1 class="jumbotron text-center bg-info col-12">削除内容確認画面</h1>
      </div>

      <div class="card">
        <div class="row">
          <div class="card-header bg-success col-12">
            <h3>以下の項目を削除しました</h3>
        </div>
    </div>

    <div class="row">
        <div class="card-body bg-warning">
            <blockquote class="blockquote">
              <p><?php echo "ニックネーム：".$nickname ?></p>
              <p><?php echo "メールアドレス：".$email ?></p>
              <p><?php echo "お問い合わせ：".$content ?></p>
          </blockquote>
      </div>
  </div>
</div>

        <div class="row">
           <a href="search.php" class="mt-3 mb-3">データベース検索に戻る</a>
        </div>

　　</div>  
</body>
</html>