<?php
$servername = "localhost";
$username = "subprimelender";
$password = "Lucianisobama1";
$dbname = "League";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
	die("<br>Connection failed: " . $conn->connect_error);
};
?>