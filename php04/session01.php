<?php
session_start();
$_SESSION["name"]="小山";
$_SESSION["age"]="33";

// コメント：$_SESSIONをつけると、グローバル変数になる
// セッションやると、postやget使わなくても、サーバーにデータ保存できる


?>