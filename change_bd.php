<?php
  $first_name = filter_var(trim($_POST['first_name']), FILTER_SANITIZE_STRING);
  $last_name = filter_var(trim($_POST['last_name']), FILTER_SANITIZE_STRING);
  $mail = filter_var(trim($_POST['mail']), FILTER_SANITIZE_STRING);
  $pass= filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
  $role= filter_var(trim($_POST['role']), FILTER_SANITIZE_STRING);
  $iddd= filter_var(trim($_POST['id']), FILTER_SANITIZE_STRING);
  
  $target_dir = "img/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

  print_r($target_file);

  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);


  $mysql = new mysqli('localhost', 'root', '', 'lb1');

  $mysql->query("UPDATE users SET `first_name` ='$first_name', `last_name` = '$last_name', `email` = '$mail', `password` = '$pass', `role_id` = '$role', `photo` = '$target_file'  WHERE id = '$iddd'");

  echo $iddd;

  $mysql->close();

  header('Location: index.php');
?>