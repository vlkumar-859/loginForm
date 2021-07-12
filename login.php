<?php 

	session_start();

	include 'connection.php';

	if ($_SERVER['REQUEST_METHOD']=='POST')
	{
		$mail = $_POST['mail'];
		$pass = $_POST['pass'];

		$query = "select * from credentials where mail = '$mail' and password = '$pass';";

		$res = mysqli_query($conn,$query);

		if (mysqli_num_rows($res)==1){
			$_SESSION['user'] = $mail;
			header('location: content.php');
		} else{
			header('location: account_not_existed.html');
		}

	}

?>