<?php
// Connection variables
/*$dbhost	= "localhost";	   // localhost or IP
$dbuser	= "root";		  // database username
$dbpass	= "12345678";		     // database password
$dbname	= "cinteva";    // database name

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	// Check connection
	if (!$conn) {
		die("conexion failed: " . mysqli_connect_error());
	}
	 $query="SELECT * FROM alumno";
        $callSP=$conn->query($query);
        while($row=$callSP->fetch_assoc()){
   

 echo $row['ALU_NOMBRE'];*/


$hostname	= "localhost";	   // localhost or IP
$username	= "root";		  // database username
$password	= "12345678";		     // database password
$database	= "cinteva";    // database name

$conexion00 = mysqli_connect($hostname, $username, $password, $database);
	// Check connection
	if (!$conexion00) {
		die("conexion failed: " . mysqli_connect_error());
	}
/*$datos= $conexion00->query("SELECT * FROM alumno where ALU_ID=1");
while($user = mysqli_fetch_array($datos)){
	 echo $user['ALU_NOMBRE'];

}
*/	


           
	
?>
