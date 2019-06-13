<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ユーザー登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- メニュー部分開始 -->
<?php
session_start();
include("funcs.php");
$pdo = db_con2();
?>
<!-- Head[Start] -->
<header>
  <?php include("menu.php")?>
</header>
<!-- Head[End] -->
<!-- メニュー部分終了 -->

<!-- Main[Start] -->
<form method="post" action="registration_insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>フリーアンケート</legend>
     <label>名前：<input type="text" name="name"></label><br>
     <label>ログインID：<input type="text" name="lid"></label><br>
     <label>ログインパスワード：<input type="text" name="lpw"></label><br>
     <label>管理フラグ：<input type="number" name="kanri_flg"></label><br>
     <label>生存フラグ：<input type="number" name="life_flg"></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
