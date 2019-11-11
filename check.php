<?php
  $first_name = filter_var(trim($_POST['first_name']), FILTER_SANITIZE_STRING);
  $last_name = filter_var(trim($_POST['last_name']), FILTER_SANITIZE_STRING);
  $mail = filter_var(trim($_POST['mail']), FILTER_SANITIZE_STRING);
  $pass= filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
  $pass1= filter_var(trim($_POST['pass1']), FILTER_SANITIZE_STRING);
  $role= filter_var(trim($_POST['role']), FILTER_SANITIZE_STRING);

  if($pass != $pass1){ header('Location: index.php'); } else {
  
  
  $target_dir = "img/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

  print_r($target_file);

  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);


  $mysql = new mysqli('localhost', 'root', '', 'lb1');
  $mysql->query("INSERT INTO users (`first_name`, `last_name`, `email`, `password`, `photo`, `role_id`) VALUES('$first_name', '$last_name', '$mail', '$pass', '$target_file', '$role')");
  $mysql->close();

  header('Location: index.php');}
?>