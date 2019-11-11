<?php
$mysql = new mysqli('localhost','root','','lb1');

$id = $_POST['deleteuserid'];
$mysql -> query("DELETE FROM users WHERE id = '$id'");
$mysql->close();
header("Location: index.php");
?>