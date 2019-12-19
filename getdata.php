<?php include 'connection.php' ?>
<?php 
	//Fetching all data from database
	$query = "SELECT * FROM `users`;";
	$result = mysqli_query($mysqli,$query);

	while ($row = mysqli_fetch_assoc($result)){
		$fn = $row['firstName']; $ln = $row['lastName']; $num = $row['phone']; 
		$cms = $row['cms']; $addr = $row['address']; $email = $row['email']; $fee = $row['fee'];
		echo "<tr><td>$fn</td>";
		echo "<td>$ln</td>";
		echo "<td>$num</td>";
		echo "<td>$cms</td>";
		echo "<td>$addr</td>";
		echo "<td>$email</td>";
		echo "<td>$fee</td>";
		//echo "<td class='text-center'> <a href='' onclick='printchallaan();'> <i class='fa fa-2x fa-print' aria-hidden='true'></i> </a> </td>";
		echo "</tr>";
	}
?>