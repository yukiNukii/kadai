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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
/*        div{
          background-color:white;
        }*/
        .bgi_brown {
          background-image: url("img/paper.jpeg");
        }

        img{
            height:100%;
            width:100%;
        }
/*        #mytext{
            position:absolute;
        }
        #myimg{
            position:relative;
        }*/
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
      $get_book_url[]=$result["book_url"];
      $get_book_name[]=$result["book_name"];
      $get_book_text[]=$result["book_text"];
      $get_book_date[]=$result["book_date"];
  }

}   
//    echo($get_data[1]);
//    $test = $get_data[1];
?> 

<div id="magazine">

<!--PHPでdivを作れる？調べる！！！-->

<?php
 for($i=1; $i<=count($get_book_name); $i++){

echo'<div class="bgi_brown">';//右側のページ
?>
<!-- <img src="img/paper.jpeg" alt="" id="myimg"> -->
<table>
<tr>
<?php
$k = $i-1;
// echo '<p id="mytext">';
     echo $get_book_name[$k];
?>
</tr>
<tr>
  <?php
     echo $get_book_text[$k];
  ?>
</tr>
<tr>
  <?php
     echo $get_book_date[$k];
  ?>
</tr>
// echo '</p>';
</table>
<?php
echo'</div>';

 echo '<div>';//ページ
    echo '<img src="' .$get_book_url[$i]. '"alt="">';
 echo '</div>';

}
?>
<!--
    <div><img src=<? echo($get_book_url[1]); ?> alt=""></div>
    <div>page 2</div>
    <div><img src=<? echo($get_book_url[2]); ?> alt=""></div>
    <div>page 4</div>
    <div><img src=<? echo($get_book_url[3]); ?> alt=""></div>
    <div>pageb5</div>
    <div><img src=<? echo($get_book_url[4]); ?> alt=""></div>
    <div></div>
    <div><img src=<? echo($get_book_url[5]); ?> alt=""></div>
    <div></div>
    <div><img src=<? echo($get_book_url[6]); ?> alt=""></div>
-->

</div>
 


  <script src="js/jquery-2.1.3.min.js"></script>
  <script src="js/turn.min.js"></script>
<script type="text/javascript">
$(function(){
    $("#magazine").turn({
        width: 950,
        height: 685,
//        autoCenter: true
    });
});
</script>

</body>
</html>