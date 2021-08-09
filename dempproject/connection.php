<?php

$server = "localhost";
$user = "root";
$passdb = "";
$db = "student_info";
$connect = mysqli_connect($server, $user, $passdb, $db);
if ($connect) {
	//echo "connection ok";
}
else{
	echo "Connection Failed".mysqli_connect_error();
}

?>