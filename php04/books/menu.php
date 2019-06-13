<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">書籍登録</a>　
            <a class="navbar-brand" href="select.php">書籍一覧</a>　
            <?php if($_SESSION["kanri_flg"]=="1"){?>
            <a class="navbar-brand" href="registration.php">ユーザー登録</a>　
            <?php }?>
            <a class="navbar-brand" href="user_select.php">ユーザー一覧</a>　
            <a class="navbar-brand" href="logout.php">ログアウト</a>
        </div>
    </div>
</nav>