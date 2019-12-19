<?php include 'connection.php'; ?>
<?php
	session_start();
	if(isset($_POST['do_login'])){

 		$email=$_POST['email'];
 		$pass=$_POST['password'];

 		$query = "SELECT * FROM `users` WHERE `email` LIKE '$email' AND `password` LIKE '$pass'";
 		
 		$select_data = mysqli_query($mysqli,$query);
 		if($row=mysqli_fetch_array($select_data)){
 			 $_SESSION['email']=$row['email'];
 			 echo "success";
 		}
 		else{
 			echo "fail";
		}
		exit();
	}
?>