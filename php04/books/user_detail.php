<?php
session_start();

//1. データ取得
$id = $_GET["id"];

//２．データ登録SQL作成
include "funcs.php";
$pdo = db_con2();
chkssid();
$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE id=:id");
$stmt->bindValue(":id", $id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
    sqlError($stmt);
} else {
    $row = $stmt->fetch();
}

if($_SESSION["kanri_flg"]=="1"){
  $readonly="";
}else{
  $readonly=" readonly";
// 半角スペース必要
}

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>更新</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <?php include("menu.php")?>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="user_update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>更新：フリーアンケート</legend>
     <label>名前：<input type="text" name="name" value="<?=$row["name"]?>"<?= $readonly?>></label><br>

     <?php if($_SESSION["kanri_flg"]=="1"){?>
     <label>ログインID：<input type="text" name="lid" value="<?=$row["lid"]?>"<?= $readonly?>></label><br>
     <label>ログインPASS：<input type="text" name="lpw" value="<?=$row["lpw"]?>"<?= $readonly?>></label><br>
     <?php }?>

     <label>管理者権限（1が権限有り）：<input type="number" name="kanri_flg" value="<?=$row["kanri_flg"]?>"<?= $readonly?>></label><br>
     <label>生存フラグ：<input type="number" name="life_flg" value="<?=$row["life_flg"]?>"<?= $readonly?>></label><br>
     <input type="hidden" name="id" value="<?=$row["id"]?>">
     <?php if($_SESSION["kanri_flg"]=="1"){?>
     <input type="submit" value="送信">
     <?php }?>
     </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
