<?php
$id=$_GET["id"];
include "funcs.php";
$pdo = db_con1();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table where id=:id");
$stmt->bindValue(":id",$id,PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
    sqlError($stmt);
}

$row = $stmt -> fetch();
//index.php（登録フォームの画面ソースコードを全コピーして、このファイルをまるっと上書き保存）
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ更新</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>



<!-- メニュー部分開始 -->
<?php
session_start();
// include("funcs.php");
$pdo = db_con2();
?>
<!-- Head[Start] -->
<header>
  <?php include("menu.php")?>
</header>
<!-- Head[End] -->
<!-- メニュー部分終了 -->


<!-- Main[Start] -->
<form method="post" action="update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>BOOKS</legend>
     <label>書籍名：<input type="text" name="bookname" value="<?=$row["bookname"]?>"></label><br>
     <label>書籍URL：<input type="text" name="bookurl" value="<?=$row["bookurl"]?>"></label><br>
     <label>コメント：<textArea name="bookcomment" rows="2" cols="40"><?=$row["bookcomment"]?></textArea></label><br>
     <input type="submit" value="送信">
    <input type="hidden" name="id" value= "<?=$row["id"]?>">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>