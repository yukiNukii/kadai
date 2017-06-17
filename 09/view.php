<?php

session_start();
include("functions.php");
sessChk();
//1.  DB接続します
$pdo = db_con();

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
          background-image: url("img/kami.jpeg");
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
        tabel{
            
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
        $get_book_url[]=$result["book_url"];
        $get_book_name[]=$result["book_name"];
        $get_book_text[]=$result["book_text"];
        $get_book_date[]=$result["book_date"];
  }
    array_push($get_book_url,"img/kami.jpeg");
    array_unshift($get_book_name,"");
    array_unshift($get_book_text,"");
    array_unshift($get_book_date,"");

}   
//    echo($get_data[1]);
//    $test = $get_data[1];
?> 

<div id="magazine">
<div class="hard"></div>
<div></div>
<?php
 for($i=0; $i<=count($get_book_url); $i++){

echo'<div class="bgi_brown">';//右側のページ
?>
<!-- <img src="img/paper.jpeg" alt="" id="myimg"> -->

<?php
    $k = $i;
     if($i==9){
        break;
     } 
//     
?>
<table height="100">

<tr>
<th><?php if(!$k==0):?>タイトル<?php endif;?></th>
<?php

// echo '<p id="mytext">';
     echo '<td>';
     echo $get_book_name[$k];
     echo '</td>';
?>
</tr>
<tr>
 <th><?php if(!$k==0):?>感想<?php endif;?></th>
  <?php
     echo '<td>';
     echo $get_book_text[$k];
     echo '</td>';
  ?>
</tr>
<tr>
<th><?php if(!$k==0):?>更新日<?php endif;?></th>
  <?php
     echo '<td>';
     echo $get_book_date[$k];
     echo '<?td>';
  ?>
</tr>

</table>
<?php
echo'</div>';

 echo '<div>';//ページ
    echo '<img src="' .$get_book_url[$i]. '"alt="">';
 echo '</div>';

}
?>

<div class="hard"></div>

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