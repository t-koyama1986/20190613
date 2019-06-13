<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/main.css" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
<title>ログイン</title>
</head>
<body>

<header>
  <nav class="navbar navbar-default">
    ログイン画面
  </nav>
</header>

<!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
<form name="form1" action="login_act.php" method="post">
ID:<input type="text" name="lid" />
PW:<input type="password" name="lpw" />
<input type="submit" value="LOGIN" />
</form>

<p><br style="font-size:50px">
ログインせずに一覧を見る場合は、以下をクリック。↓
<!-- <p style= "color:red"><a class="navbar-brand" href="no_login_select.php">確認画面（機能制限有り） -->
<p style= "color:red"><a input type="button" value="a" href="no_login_select.php">確認画面（機能制限有り）

</body>
</html>