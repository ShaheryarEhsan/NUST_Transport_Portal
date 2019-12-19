<?php
session_start();

if(isset($_POST['user'])){
    $str = "Hello world!";
echo $str;
echo "<br>What a nice day!";
$em = $_POST["email"];
$pass = $_POST["password"];

echo $em;
$username = "root";
    $password = "";
    $database = "ntp";
    $mysqli = mysqli_connect("localhost", $username, $password, $database);

    $query = "SELECT * FROM `users` WHERE `email` LIKE '$email' AND `password` LIKE '$pass'";
    $select_data = mysqli_query($mysqli,$query);

    while($row = mysql_fetch_array($select_data)) {
    echo print_r($row);


}
}


?>