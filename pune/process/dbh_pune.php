<?php
//Development Connection
// $servername = "localhost";
// $dBUsername = "root";
// $dbPassword = "";
// $dBName = "payroll_pune";

//Remote Database Connection
$servername = "remotemysql.com";
$dBUsername = "mtY2M0d1rz";
$dbPassword = "43d4L9nvna";
$dBName = "mtY2M0d1rz";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}

?>