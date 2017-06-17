<?php

$id = $_GET["id"];
//1.  DB接続します
echo($id);
try {
  $pdo = new PDO('mysql:dbname=gs_db32;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

$stmt = $pdo->prepare("DELETE FROM gs_bm_table WHERE id=:id");

$stmt->bindValue(':id', $id, PDO::PARAM_INT);//数値じゃ無いとダメ（strなら文字列）
    
$status = $stmt->execute();

if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる　問答無用で覚えちゃう
 header("Location: select.php");
 exit;
}

?>