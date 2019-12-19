<?php 
	$fn = $_POST["firstName"];
	$ln = $_POST["lastName"];
	$phone = $_POST["phone"];
	$cms = $_POST["cms"];
	$em = $_POST["inputEmail"];
	$pass = $_POST["inputPassword"];
	$add = $_POST['address'];

	$username = "root";
	$password = "";
	$database = "ntp";
	$mysqli = mysqli_connect("localhost", $username, $password, $database);
	$query = "INSERT INTO `users` (`firstName`, `lastName`, `phone`, `cms`, `email`, `address`, `password`) VALUES ('$fn', '$ln', '$phone', '$cms', '$em', '$add', '$pass');";

	mysqli_query($mysqli,$query);
	echo "<script type='text/javascript'>alert('You have been registered. You will now be redirected to the login page');</script>";

	sleep(2);
	header("location: login.php");
?>
