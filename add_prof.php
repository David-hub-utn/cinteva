<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
	 
		<title>Servicio Social UTN</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="../../assets/css/main.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.min.css" />
	</head>
	<body class="is-PROFload">
    
		<!-- Header -->
				
			<header id="header">
				<a class="logo" href="../../index.html">Inicio</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>
			

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="../../index.html">Home</a></li>
				</ul>
			</nav>

		

		<!-- Highlights -->
			<section class="wrapper">
				<div class="container">
					<div class="row">
					
                    <?php
                    

                    $PROF_NOMBRE       = $_POST [ "PROF_NOMBRE" ];
                    $PROF_APP          = $_POST [ "PROF_APP" ];
                    $PROF_APM          = $_POST [ "PROF_APM" ];
                    $PROF_CORREO       = $_POST [ "PROF_CORREO" ];
                    $PROF_CONTRASEÑA   = $_POST [ "PROF_CONTRASEÑA" ];
                    $GRUPO_ID          = $_POST [ "GRUPO_ID" ];
                    echo "$PROF_NOMBRE";
                    $longitud  =  16;
                    function generar_token_seguro($longitud)
					{
						return bin2hex(random_bytes(($longitud - ($longitud % 2)) / 2));
					}
					$PROF_CLAVE= generar_token_seguro($longitud);
                
                    $servername = "localhost";
                    $username = "u774797842_cinteva";
                    $password = "12345678";
                    $dbname = "u774797842_cinteva";
                    
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 
                    $sql = "call SP_profesor_ins(null,'$PROF_NOMBRE','$PROF_APP','$PROF_APM','$PROF_CORREO','$PROF_CONTRASEÑA','ALTA','$GRUPO_ID');";

                    if ($conn->query($sql) === TRUE) { 
                        ?>
                    <div class='alert alert-warning mt-4' role='alert'>
                    <header>
                    <br>
                    <h2 align="center">Registro exitoso.</h2>
                    
                    <h3>NOMBRE:<?php echo " " .$PROF_NOMBRE." " .$PROF_APP." ". $PROF_APM?></h3>
                    </header>
                    
                    <br>
                    <a class='btn btn-outline-primary' href='../login/index.php' role='button'>Iniciar sesión</a>
                    </div>

                   
                    <!--Este es el código que envia el correo-->

                        
                    <?php }
                     else {

                                    echo "<div class='alert alert-warning mt-4' role='alert'>
                                    <h1>Opss, ocurrió  alguno de estos errores:</h1>
                                    <li>Tu ID no existe o ya está registrada</li>
                                    <li>El correo que ingresaste ya existe</li>
                                    <br>
                                    <a class='btn btn-outline-primary' href='index.php' role='button'>Volver al registro</a>
                                </div>"; 
                    }
                    ?>
                   
                   
                   
                    <article>
                    
                   


                    <div class="12u$">
                    
                   

                    
                    							
                    </article>
					</div>
				</div>
			</section>

		


		<!-- Scripts -->
			<script src="../../assets/js/jquery.min.js"></script>
			<script src="../../libs/bootstrap/js/bootstrap.min.js"></script>
			<script src="../../assets/js/browser.min.js"></script>
			<script src="../../assets/js/breakpoints.min.js"></script>
			<script src="../../assets/js/util.js"></script>
			<script src="../../assets/js/main.js"></script>
	</body>
</html>