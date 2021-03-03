<?php
//Development Connection
// $servername = "localhost";
// $dBUsername = "root";
// $dbPassword = "";
// $dBName = "payroll_ahmedabad";

//Remote Database Connection
$servername = "remotemysql.com";
$dBUsername = "Ba1MGyKqBj";
$dbPassword = "hA69iQQmeI";
$dBName = "Ba1MGyKqBj";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}

?>