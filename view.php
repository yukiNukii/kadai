<?php
//1.  DB接続します
try {
  $pdo = new PDO('mysql:dbname=gs_db32;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
//    $view .= '<p>';
//    $view .= $result["id"];
//    $view .= $result["book_name"];
    $view .= $result["book_url"];
//    $view .= $result["book_text"];
//    $view .= $result["book_date"];
//    $view .= '</p>';
  }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        img{
            height:996;
            width:100%;
        }
    
    </style>

</head>

<!-- Main[End] -->
<!--本-->
<? var_dump($view); ?>
<? var_dump(count($view)); ?>
<div id="magazine">
    <div><img src=<? $view[1] ?> alt=""></div>
    <div>page 2</div>
    <div><img src="https://images-na.ssl-images-amazon.com/images/I/41f6SJzdJgL._SX311_BO1,204,203,200_.jpg" alt=""></div>
    <div>page 4</div>
    <div><img src="https://images-na.ssl-images-amazon.com/images/I/41aXtS8PLML._SX347_BO1,204,203,200_.jpg" alt=""></div>
    <div></div>
    <div><img src="https://images-na.ssl-images-amazon.com/images/I/51e6mV1O20L._SX346_BO1,204,203,200_.jpg" alt=""></div>
    <div></div>
    <div><img src="https://images-na.ssl-images-amazon.com/images/I/51%2BzmxiQfmL._SX346_BO1,204,203,200_.jpg" alt=""></div>
    <div></div>
    <div><img src="https://images-na.ssl-images-amazon.com/images/I/51eOOVlZgqL._SX344_BO1,204,203,200_.jpg" alt=""></div>
</div>
  

  <script src="js/jquery-2.1.3.min.js"></script>
  <script src="js/turn.min.js"></script>
<script type="text/javascript">
$(function(){
    $("#magazine").turn({
        width: 996,
        height: 646,
//        autoCenter: true
    });
});
</script>

</body>
</html>