<?php  

	session_start();
	include 'connection.php';

	$user = $_SESSION['user'];

	$query = "select * from credentials where mail = '$user'";

	$res = mysqli_query($conn,$query);

	$arr = mysqli_fetch_assoc($res);

	$mail = $arr['mail'];
	$name = $arr['name'];
	$time = $arr['time'];

	session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<div style="width:600px;border:solid 2px black;margin:auto;margin-top:200px;text-align:center;">
		<h2>THE CREDENTIALS OF THE USER</h2>
		<h3>user name : <b> <?php echo $name; ?> </b> </h3> 
		<h3>user mail : <b> <?php echo $mail; ?> </b> </h3>
		<h3>activation time : <b> <?php echo $time; ?> </b> </h3> 
	</div>

	<div style="width:200px;text-align:center;border:2px solid black;margin:auto;padding:10px;margin-top:100px">

		<button script="background-color:gray;text-align:center;margin:20px;">
			<a href="login.html">log in</a>
		</button>
		<button script="background-color:gray;text-align:center;margin:20px;">
			<a href="signup.html">sign up</a>
		</button>
	</div>
</body>
</html>