<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
  <script src="https://github.com/blasten/turn.js.git"></script>
  <script src="js/jquery-2.1.3.min.js"></script>
  <script src="./ckeditor/ckeditor.js"></script>
</head>
<body>
   <header>
       <h1>本の登録</h1>
   </header>
    <form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
<!--    <legend>本の登録</legend>-->
    <table>
     <tr><th>書籍名：</th><td><input type="text" name="book_name"></td></tr>
    <tr><th>URL：</th><td><textArea name="book_url" rows="2" cols="100"></textArea></td></tr>
<!--     <tr><th>コメント：</th><td><textArea name="book_text" rows="4" cols="100"></textArea></td></tr>-->
    <textArea name="book_text" id ="editor1" rows="10" cols="80">
        this is my textarea to be replace with CKEditor.
    </textArea>
    <script>
        CKEDITOR.replace('editor1');    
    </script>
     </table>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ　一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<!--

<div id="magazine">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
</div>

body閉じタグ直前においておく
<script>
    $("#magazine").turn();
</script>
-->
</body>
</html>
