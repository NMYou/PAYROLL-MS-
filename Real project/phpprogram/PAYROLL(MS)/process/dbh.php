<?php

$servername = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dBName = "payroll";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}

?>