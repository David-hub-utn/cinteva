<?php
//Connection info. file
include 'conexion/conn.php';
//Connection variables
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
			// data sent from form login.php
			$PROF_CORREO = $_POST['PROF_CORREO']; 
		
			$PROF_CONTRASEÑA = $_POST['PROF_CONTRASEÑA'];
		

			$result="SELECT * FROM profesor WHERE PROF_CORREO='$PROF_CORREO' AND PROF_CONTRASEÑA='$PROF_CONTRASEÑA'";
		
		
			$resultado=mysqli_query($conn, $result);

			$row = mysqli_fetch_assoc($resultado);
			$count = mysqli_num_rows($resultado);
			// If count == 1 that means the email is already on the database
			if($count==1){header('Location:https://cinteva.000webhostapp.com/profesores/profesores.html');}else{header('Location:https://cinteva.000webhostapp.com/profesores/login_prof_fail.php');}
			    ?>