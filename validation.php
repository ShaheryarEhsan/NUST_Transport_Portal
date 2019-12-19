<?php
$value = $_GET['query'];
$formfield = $_GET['field'];
// Check Valid or Invalid user name when user enters user name in username input field.
if ($formfield == "firstNameOut") {
if (strlen($value) < 4) {
echo "<p class='text-danger'>Must be 3+ letters</p>";
} else {
echo "<i class='fas fa-check' style='font-size:24px;color:green'></i>";
}
}
if ($formfield == "lastNameOut") {
if (strlen($value) < 4) {
echo "<p class='text-danger'>Must be 3+ letters</p>";
} else {
echo "<i class='fas fa-check' style='font-size:24px;color:green'></i>";
}
}
//Check valid phone number.
if ($formfield == "phoneOut") {
if (strlen($value) < 11) {
echo "<p class='text-danger'>Number too short</p>";
} else if(strlen($value) > 12) {
echo "<p class='text-danger'>Number too long</p>";
}
else{
echo "<i class='fas fa-check' style='font-size:24px;color:green'></i>";
}
}
//Checking CMS
if ($formfield == "cmsOut") {
if ((strlen($value) < 6) or (strlen($value) > 6)) {
echo "<p class='text-danger'>CMS too short/long</p>";
} else{
echo "<i class='fas fa-check' style='font-size:24px;color:green'></i>";
}
}
// Check Valid or Invalid password when user enters password in password input field.
if ($formfield == "passwordOut") {
if (strlen($value) < 6) {
echo "<p class='text-danger'>Password too short</p>";
} else {
echo "<span>Strong</span>";
}
}
// Check Valid or Invalid email when user enters email in email input field.
if ($formfield == "inputEmailOut") {
if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
echo "<p class='text-danger'>Invalid email</p>";
} else {
echo "<i class='fas fa-check' style='font-size:24px;color:green'></i>";
}
}
if ($formfield == "passwordReOut") {
	$arr1 = explode(",", $value);
	if ($arr1[0]!=$arr1[1]){
		echo "<p class='text-danger'>Passwords do not match</p>";
	}
	else{
		echo "<i class='fas fa-check' style='font-size:24px;color:green'></i>";
	}
}
?>