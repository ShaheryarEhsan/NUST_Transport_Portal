<?php include 'connection.php'; ?>
<?php
	session_start();
	if(isset($_POST['month'])){
 		$month=$_POST['month'];

 		$query = "SELECT `email`,`fee` FROM `users`";
 		
 		$select_data = mysqli_query($mysqli,$query);
 		while ($row=mysqli_fetch_array($select_data)) {
 			$email = $row['email'];	$fee = $row['fee'];
 			$query = "INSERT INTO `challaan`(`email`, `month`, `fee`) VALUES ('$email', '$month', '$fee');";
 			mysqli_query($mysqli, $query);
 		}
 		echo "success";
 	}
?>