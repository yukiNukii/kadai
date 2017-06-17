<?php
//1.  DB接続します
try {
  $pdo = new PDO('mysql:dbname=gs_db32;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
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
  //Selectデータの数だけ自動でループしてくれる　問答無用で覚えちゃう
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
//    $view .= '<p>';
//    $view .= $result["id"];
//    $view .= $result["book_name"];
//    $view .= $result["book_url"];
//    $view .= $result["book_text"];
//    $view .= $result["book_date"];
    $id[] = $result["id"];
    $name[] = $result["book_name"];
    $url[] = $result["book_url"];
    $text[] = $result["book_text"];
    $date[] = $result["book_date"];
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>
    div{
        padding: 10px;font-size:16px;
    }
    .content{
        min-height: calc(100vh - 70px);
    }
    .footer,
    push{
        height: 50px;
    }
    
</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録</a>
        <a class="navbar-brand" href="view.php">BOOK</a>
    </div>
      </div>
  </nav>
</header>
<!-- Head[End] -->
<div class="content">
<table frame="border" rules="all">
    <tr>
        <td id = "id">ID</td>
        <td id ="name">USER_NAME</td>
        <td id ="lid">lid</td>
        <td id ="lpw">lpw</td>
        <td id ="kanri_flg">kanri_flg</td>
        <td id ="life_flg">life_flg</td>
    </tr>

<!-- Main[Start] -->
<?php
    for($i=0; $i<count($id); $i++){
//<div>
    if($i % 2 == 0){
        $bgcolor="#F4ADB0";
    }else{
        $bgcolor="#FFFFFF";
    }
?>
<tr bgcolor = "<?=$bgcolor?>">
    <td><? echo $id[$i]; ?></td>
<!--    <td><a href= "<?=$url[$i];?>"><? echo $name[$i]; ?></a></td>-->
    <td><a href= "user_detail.php?id=<?=$id[$i];?>"><? echo $name[$i]; ?></a></td>
    <td><? echo $text[$i]; ?></td>
    <td><? echo $date[$i]; ?></td>
    <td width="100px" align="center">
    <a href="delete.php?id=<?=$id[$i];?>">削除</a>

    
   </td>
</tr>
<?
};
?>
</table>
<!-- Main[Start] -->
<!--
<div>
    <div class="container jumbotron"><?=$view?></div>
  </div>
-->
</div>
<!--</div>-->
<!-- Main[End] -->
<!--
    <footer class="footer">
        <a href="delete.php">データ削除</a>
        
    </footer>
-->
</body>
</html>
