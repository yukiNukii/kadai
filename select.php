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
<title>BOOK一覧表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>
    div{padding: 10px;font-size:16px;}
    #id{
        width:100px;
    }
    #name{
        width:300px;
    }
    #kansou{
        width:700px;
    }
    #date{
        width:250px;
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
      <a href="view.php">bookで表示</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<table frame="border" rules="all">
    <tr>
        <td id = "id">ID</td>
        <td id ="name">書籍名</td>
        <td id ="kansou">感想</td>
        <td id ="date">日付</td>
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
    <td><? echo $name[$i]; ?></td>
    <td><? echo $text[$i]; ?></td>
    <td><? echo $date[$i]; ?></td>

</tr>
<?
};
?>
</table>
<!-- Main[End] -->

</body>
</html>
