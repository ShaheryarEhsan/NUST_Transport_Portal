<?php include 'connection.php'; ?>
<?php 

	//Function to create a dynamic link for route of each user
	function setroute($address){
		$url ="https://www.google.com/maps/embed/v1/directions?origin=Concordia%20II%20NUST%20Islamabad&destination=".$address."&key=AIzaSyAMH2owBJLzLI_SN9cQn6sEjEtL6WTelqk";
		return $url;
	}

	//Storing all values received from POST
	$fn = $_POST["firstName"];
	$ln = $_POST["lastName"];
	$phone = $_POST["phone"];
	$cms = $_POST["cms"];
	$em = $_POST["inputEmail"];
	$pass = $_POST["inputPassword"];
	$add = $_POST['address'];
	$type = $_POST['type'];
	$dept = $_POST['dept'];

	//Getting distance of address from maps distance API
	$new_addr = str_replace(", ", "+", $add);
	$request = "https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&origins=".$new_addr."&destinations=SEECS+NUST,Islamabad&key=AIzaSyAMH2owBJLzLI_SN9cQn6sEjEtL6WTelqk";
	$json = file_get_contents($request);
	$json_arr = json_decode($json);

	//Checking if respose received
	if ($json_arr->status=='OK') {
		$elements = $json_arr->rows[0]->elements;
		$distance = $elements[0]->distance->text;
	}

	//Calculating fee based on distance
	$dist = intval($distance);
	if ($dist < 20){
		$fee = 5400;
	}
	else if($dist < 30){
		$fee = 6000;
	}
	else{
		$fee = 6800;
	}

	$route = setroute($new_addr);
	echo "<script type='text/javascript'>alert('You have been registered. You will now be redirected to the login page');</script>";
	$query = "INSERT INTO `users` (`firstName`, `lastName`, `phone`, `cms`, `email`, `address`,`fee`,`type`,`department`, `password`, `route`) VALUES ('$fn', '$ln', '$phone', '$cms', '$em', '$add','$fee','$type','$dept', '$pass', '$route');";

	mysqli_query($mysqli,$query);
	echo "<script type='text/javascript'>window.location.href='login.php';</script>";
?>
