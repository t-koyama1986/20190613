<?php
session_start();
// if(
//   !isset($_SESSION["chk_ssid"]) || 
//   $_SESSION["chk_ssid"] !=session_id()
// ){
//   exit("Login:Error!");
// }else{
//   session_regenerate_id(true);
//   $_SESSION["chk_ssid"]=session_id();
// }



include "funcs.php";
$pdo = db_con();
chkssid();


//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_an_table");
$status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
    sqlError($stmt);
} else {
    //Selectデータの数だけ自動でループしてくれる
    //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
      if($_SESSION["kanri_flg"]=="1"){
        $view .= '<p>';
        $view .= '<a href="delete.php?id=' . $result["id"] . '">';
        $view .= "[☓]";
        $view .= '</a>';
      }
        $view .= '<a href="detail.php?id=' . $result["id"] . '">';
        $view .= $result["name"] . "," . $result["email"] . "<br>";
        $view .= '</a>';
        $view .= '</p>';

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
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <!-- <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録</a>
      </div>
    </div>
  </nav> -->

<?php include("menu.php")?>

</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?=$view?></div>
</div>
<!-- Main[End] -->

</body>
</html>
