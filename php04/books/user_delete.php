<?php
$id = $_GET["id"];

include "funcs.php";
$pdo = db_con2();

$sql = "DELETE FROM gs_user_table WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT); //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//
if ($status == false) {
    sqlError($stmt);
} else {
    header("Location: user_select.php");
    exit;
}
