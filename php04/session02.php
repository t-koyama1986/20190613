<?php
session_start();
echo $_SESSION["name"];
echo "<br>";
echo $_SESSION["age"];
echo "<br>";
echo session_id();
?>