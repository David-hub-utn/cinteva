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
			$ALU_CORREO = $_POST['ALU_CORREO']; 
		
			$ALU_CONTRASEÑA = $_POST['ALU_CONTRASEÑA'];
		

			$result="SELECT * FROM alumno WHERE ALU_CORREO='$ALU_CORREO' AND ALU_CONTRASEÑA='$ALU_CONTRASEÑA'";
		
		
			$resultado=mysqli_query($conn, $result);

			$row = mysqli_fetch_assoc($resultado);
			$count = mysqli_num_rows($resultado);
			// If count == 1 that means the email is already on the database
			if($count==1){header('Location:https://cinteva.000webhostapp.com/alumnos/alumnos.html');}else{header('Location:https://cinteva.000webhostapp.com/alumnos/login_alum_fail.php');}
			    ?>