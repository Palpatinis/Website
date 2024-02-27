<?php  

$host_name = "127.0.0.1";
$user_name = "root";
$password = "";

$db_name = "logisticsdb";

$conn = mysqli_connect($host_name, $user_name, $password, $db_name);

if (!$conn) {
	echo "Failure: Could not connect to database!";
	exit();
}
?>