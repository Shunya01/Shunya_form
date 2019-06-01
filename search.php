
<?php

require_once ('function.php');
require_once ('dbconnect.php');

$nickname = '';
if (isset($_GET['searchWord'])) {
    $searchWord = $_GET['searchWord'];
}

$stmt = $dbh->prepare('SELECT * FROM `surveys` WHERE CONCAT(nickname, email,content) LIKE ?');
$stmt->execute(["%$searchWord%"]);
$results = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>検索システム</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div class="container">

    <div class="row">
    <h1 class="jumbotron text-center bg-info col-12">データベース検索システム</h1>
    </div>

    <div class="row">
    <form action="search.php" method="GET" class="mb-5">
        <p>キーワードを入力すると、キーワードを含むデータを検索することができます。</p>
        <input type="text" name="searchWord">
        <input type="submit" value="検索">
    </form>
    </div>

    <?php foreach ($results as $result) : ?>
        <p><?php echo $result['nickname']?></p>
        <p><?php echo $result['email']?></p>
        <p><?php echo $result['content']?></p>
        <hr style="border:0;border-top:1px solid blue;">
    <?php endforeach; ?>
　　</div>  
</body>
</html>