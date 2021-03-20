<?php
// Connection variables
$dbhost	= "localhost";	   // localhost or IP
$dbuser	= "u774797842_cinteva";		  // database username
$dbpass	= "12345678";		     // database password
$dbname	= "u774797842_cinteva";    // database name

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	// Check connection
	if (!$conn) {
		die("conexion failed: " . mysqli_connect_error());
	}
	
?>