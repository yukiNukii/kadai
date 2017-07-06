<?php

//1.アップロードが正常に行われたかチェック
//isset();でファイルが送られてきてるかチェック！そしてErrorが発生してないかチェック
 //0の場合はエラーじゃない　その他の文字だったらエラーになっている
if(isset($_FILES['filename']) && $_FILES['filename']['error']==0){
    
    //2. アップロード先とファイル名を作成 いまのディレクトリと同じ階層
    //FILEはFILES Sがつく　ファイル名だけ取得
    $upload_file = "./upload/".$_FILES["filename"]["name"];
    
    // アップロードしたファイルを指定のパスへ移動
    //move_uploaded_file("一時保存場所","成功後に正しい場所に移動");
    //自動で一時保存場所にまずは移動される
    if (move_uploaded_file($_FILES["filename"]['tmp_name'],$upload_file)){
        
        //パーミッションを変更（ファイルの読み込み権限を付けてあげる）
        //chmod は権限をあげる関数
        chmod($upload_file,0644);
        
        //アップロード成功したら文字と画像を表示
        echo 'アップロード成功';
        echo '<img src="'.$upload_file.'">';
        
    }else{
        echo "fileuploadOK...Failed";
    }
}else{
    echo "fileupload失敗";
}


/*
   $upload_file に"./upload/ファイル名"が入ってるので、DBにはこの変数を登録
   表示するところでは「echo '<img src="'.$upload_file.'">';」のように上に例をキサイしてます。
*/

?>