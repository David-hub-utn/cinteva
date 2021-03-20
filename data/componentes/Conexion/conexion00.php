
<?php
$hostname	= "localhost";	   // localhost or IP
$username	= "id11356717_cinteva";		  // database username
$password	= "12345678";		     // database password
$database	= "id11356717_cinteva";    // database name

$conexion00 = mysqli_connect($hostname, $username, $password, $database);
	// Check connection
	if (!$conexion00) {
		die("conexion failed: " . mysqli_connect_error());
	}
$datos= $conexion00->query("SELECT * FROM preguntas where PREG_ID=1");
while($user = mysqli_fetch_array($datos)){
	echo "$user[PREG_CONTENIDO]";

}
	
?>