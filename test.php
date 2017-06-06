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
    
    <form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>フリーアンケート</legend>
     <label>書籍名：<input type="text" name="book_name"></label><br>
       <label>URL：<textarea name="book_url" rows="2" cols="100"></textarea></label><br>
     <label>コメント<textArea name="book_text" rows="4" cols="100"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->
<!--本-->

<div id="magazine">
    <div><img src="https://images-na.ssl-images-amazon.com/images/I/41MtSYn7hIL._SX347_BO1,204,203,200_.jpg" alt=""></div>
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