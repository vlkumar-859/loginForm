<?php 

	session_start();

	include 'connection.php';

	if ($_SERVER['REQUEST_METHOD']=='POST')
	{
		$name = $_POST['name'];
		$pass = $_POST['pass'];
		$mail = $_POST['mail'];

		$query = "select * from credentials where mail = '$mail';";
		
		$res = mysqli_query($conn,$query);

		if (mysqli_num_rows($res)==1)
		{
			header("location: account_existed.html");
		} else{
			
			$query = "insert into `credentials`(`mail`, `name`, `password`) values('$mail','$name','$pass')";

			$res = mysqli_query($conn,$query);
			
			$_SESSION['user'] = $mail;

			header("location: content.php");
		}
	}

 ?>

