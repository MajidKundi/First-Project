<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="javadudi";

// Database connection
$conn = new mysqli($servername,$username,$password,$db);

$name=$_POST['name'];
$email=$_POST['email'];
$psw=$_POST['psw'];
$psw_repeat=$_POST['psw-repeat'];

$sql = "INSERT INTO `signup` (`id`, `name`, `email`, `pswd`, `repeat-pswd`) VALUES ('0', '$name', '$email', '$psw', '$psw_repeat');"

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
