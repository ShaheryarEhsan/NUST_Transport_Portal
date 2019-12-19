<?php include 'connection.php'; ?>
<?php 
	if ($_POST['user']=='user'){
		$email = $_POST['email'];
		$query = "SELECT * FROM `challaan` WHERE `email` LIKE '$email'";
		$select_data = mysqli_query($mysqli,$query);
		$row = mysqli_fetch_array($select_data);
		if ($row){
			echo "Redirecting to Challaan page";
		}
		else{
			echo "challaan does not exist";
		}
	}
?>