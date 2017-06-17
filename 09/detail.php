<?php
$id = $_GET["id"];
//echo $id;

//1.  DB接続します
try {
  $pdo = new PDO('mysql:dbname=gs_db32;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table WHERE id=:id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);//数値じゃ無いとダメ（strなら文字列）
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる　問答無用で覚えちゃう
 $row = $stmt->fetch();
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>POSTデータ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid"></div>
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="bm_update.php">
 <input type="hidden" name ="id" value="<?=$id?>">
  <div class="jumbotron">
   <fieldset>
    <legend>ブックマーク</legend>
    <table>
         <tr>
             <th>書籍名</th><td><input type="text" name="book_name" value="<?=$row["book_name"]?>"></td></tr>
         <tr>
             <th>URL</th><td><input type="text" name="book_url" value="<?=$row["book_url"]?>"></td></tr>
         <tr>
             <th></th><td><textArea name="book_text" rows="4" cols="40"><?=$row["book_text"]?></textArea></td></tr>
         
    </table>

    </fieldset>
  </div>
<input type="submit" value="送信">
</form>
<!-- Main[End] -->


</body>
</html>
