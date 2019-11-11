<?php
	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);


	$mysql = new mysqli('localhost', 'root', '', 'lb1');
	
	$result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");

	$user = $result->fetch_assoc();

	if(empty($user)){
		echo "Такой пользователь не найден";
		exit();
	}

	session_start ();

	$_SESSION['user'] = $user['first_name'];
    $_SESSION['user_id'] = $user['role_id'];
    $_SESSION['id_id'] = $user['id'];
    echo $_SESSION['user'];



	/*setcookie('user', $user['first_name'], time() + 3600, "/");
	setcookie('user_id', $user['role_id'], time() + 3600, "/");*/
	
	$mysql->close();

	header('Location: index.php');
?>