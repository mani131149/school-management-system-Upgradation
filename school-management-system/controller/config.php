<?php

$servername = "localhost";
$username   = "mani";
$password   = "mani@131149";
$dbname     = "std1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
	
die("Connection failed: " . mysqli_connect_error());

}

?>