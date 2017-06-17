<?php
//1.POSTでParamを取得

$id = $_POST["id"];
$book_name = $_POST["book_name"];
$book_url = $_POST["book_url"];
$book_text = $_POST["book_text"];
//
//echo($id);
//2.DB接続など
echo($id);
try {
  $pdo = new PDO('mysql:dbname=gs_db32;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//3.UPDATE gs_an_table SET ....; で更新(bindValue)
//　基本的にinsert.phpの処理の流れです。

$stmt = $pdo->prepare("UPDATE gs_bm_table SET book_name=:book_name, book_url=:book_url, book_text=:book_text  WHERE id=:id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);//数値じゃ無いとダメ（strなら文字列）
$stmt->bindValue(':book_name', $book_name, PDO::PARAM_STR);
$stmt->bindValue(':book_url', $book_url, PDO::PARAM_STR);
$stmt->bindValue(':book_text', $book_text, PDO::PARAM_STR);
    
$status = $stmt->execute();

//３．データ表示
$view="";
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



