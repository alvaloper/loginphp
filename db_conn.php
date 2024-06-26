<?php  

$sname = "localhost";
$uname = "root";
$password = "123456789";

$db_name = "logind";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection Failed!";
	exit();
}