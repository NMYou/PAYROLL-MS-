<?php
//Development Connection
// $servername = "localhost";
// $dBUsername = "root";
// $dbPassword = "";
// $dBName = "payroll_mumbai";

//Remote Database Connection
$servername = "remotemysql.com";
$dBUsername = "maMc1saxdP";
$dbPassword = "FQ9Mg3GdUu";
$dBName = "maMc1saxdP";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}

?>