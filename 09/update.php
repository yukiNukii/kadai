<?php
include("functions.php");
//1.POSTでParamを取得
$id     = $_POST["id"];
$book_name = $_POST["book_name"];
$book_url  = $_POST["book_url"];
$book_text = $_POST["book_text"];

//2.DB接続など
$pdo = db_con();

//3.UPDATE gs_an_table SET ....; で更新(bindValue)
//　基本的にinsert.phpの処理の流れです。
$stmt = $pdo->prepare("UPDATE gs_bm_table SET book_name=:book_name, book_url=:book_url, book_text=:book_text WHERE id=:id");
$stmt->bindValue(':book_name', $book_name, PDO::PARAM_STR);
$stmt->bindValue(':book_url', $book_url, PDO::PARAM_STR);
$stmt->bindValue(':book_text', $book_text, PDO::PARAM_STR);
$stmt->bindValue(':id',$id, PDO::PARAM_INT);
$status = $stmt->execute();

if($status==false){
  queryError($stmt);
}else{
  header("Location: select.php");
  exit;
}

?>
