function checkForm() {
// Fetching values from all input fields and storing them in variables.
var firstName = document.getElementById("firstName").value;
var lastName = document.getElementById("lastName").value;
var phone = document.getElementById("phone").value;
var cms = document.getElementById("cms").value;
var email = document.getElementById("inputEmail").value;
var address = document.getElementById("address").value;
var password = document.getElementById("inputPassword").value;
var rpass = document.getElementById("confirmPassword").value;

//Check input Fields Should not be blanks.
if (firstName == '' || lastName == '' || phone == '' || cms == '' || address == '' || password == '' || rpass == '') {
	alert("Fill all fields please and submit again");
} else {
//Notifying error fields
var firstNameOut = document.getElementById("firstNameOut").innerHTML;
var lastNameOut = document.getElementById("lastNameOut").innerHTML;
var phoneOut = document.getElementById("phoneOut").innerHTML;
var cmsOut = document.getElementById("cmsOut").innerHTML;
var emailOut = document.getElementById("inputEmailOut").innerHTML;
var passwordOut = document.getElementById("passwordOut").innerHTML;
var rpassOut = document.getElementById("passwordReOut").innerHTML;

//Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
if (firstNameOut == '<p class="text-danger">Must be 3+ letters</p>' ||
	lastNameOut == '<p class="text-danger">Must be 3+ letters</p>' ||
	phoneOut == '<p class="text-danger">Number too short</p>' ||
	phoneOut == '<p class="text-danger">Number too long</p>' ||
	cmsOut == '<p class="text-danger">CMS too short/long</p>' ||
	emailOut == '<p class="text-danger">Invalid email</p>' ||
	passwordOut == '<p class="text-danger">Password too short</p>' ||
	rpassOut == '<p class="text-danger">Passwords do not match</p>') {
alert("Fill Valid Information");
} else {
//Submit Form When All values are valid.
document.getElementById("myForm").submit();
}
}
}
// AJAX code to check input field values when onblur event triggerd.
function validate(field, query) {
var xmlhttp;
if (window.XMLHttpRequest) { // for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp = new XMLHttpRequest();
} else { // for IE6, IE5
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
document.getElementById(field).innerHTML = "Validating..";
} else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
document.getElementById(field).innerHTML = xmlhttp.responseText;
} else {
document.getElementById(field).innerHTML = "Error Occurred. <a href='index.php'>Reload Or Try Again</a> the page.";
}
}
xmlhttp.open("GET", "validation.php?field=" + field + "&query=" + query, false);
xmlhttp.send();
}