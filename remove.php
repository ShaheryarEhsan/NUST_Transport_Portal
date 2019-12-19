<?php include 'connection.php'; ?>
<?php 
	session_start();
	$email = $_SESSION['email'];
	$query = "DELETE FROM `users` WHERE `email` LIKE '$email'";
	mysqli_query($mysqli,$query);
?>
<?php include'logout.php' ;?>