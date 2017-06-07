<?php
//1.  DB接続します
try {
  $pdo = new PDO('mysql:dbname=gs_db32;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
//$stmt = $pdo->prepare("SELECT book_url FROM gs_bm_table");
$status = $stmt->execute();

////３．データ表示
//$view="";
//if($status==false){
//  //execute（SQL実行時にエラーがある場合）
//  $error = $stmt->errorInfo();
//  exit("ErrorQuery:".$error[2]);
//
//}else{
//  //Selectデータの数だけ自動でループしてくれる
//  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
////    $view .= '<p>';
////    $view .= $result["id"];
////    $view .= $result["book_name"];
//    $view .= $result["book_url"];
////    $view .= $result["book_text"];
////    $view .= $result["book_date"];
////    $view .= '</p>';
//  }
//
//}
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
<body>
    
<!-- Main[End] -->
<!--本-->
<?php
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
//    $view .= $result["book_url"];
//    $view .= $result["book_text"];
//    $view .= $result["book_date"];
//    $view .= '</p>';
      $get_data[]=$result["book_url"];
      
  }

}   
//    echo($get_data[1]);
//    $test = $get_data[1];
?> 

<div id="magazine">

<!--PHPでdivを作れる？調べる！！！-->
<?php
//  echo '<div>';
//    echo '<img src="https://images-fe.ssl-images-amazon.com/images/I/51d892EMefL.jpg">';
// echo '</div>';
?>

echo()
<?php
 for($i=1; $i<=count($get_data); $i++){
  echo '<div>';
    echo '<img src="' .$get_data[$i]. '"alt"">';
 echo '</div>';
}
?>
<!--
    <div><img src=<? echo($get_data[1]); ?> alt=""></div>
    <div>page 2</div>
    <div><img src=<? echo($get_data[2]); ?> alt=""></div>
    <div>page 4</div>
    <div><img src=<? echo($get_data[3]); ?> alt=""></div>
    <div>pageb5</div>
    <div><img src=<? echo($get_data[4]); ?> alt=""></div>
    <div></div>
    <div><img src=<? echo($get_data[5]); ?> alt=""></div>
    <div></div>
    <div><img src=<? echo($get_data[6]); ?> alt=""></div>
-->

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