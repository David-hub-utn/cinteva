<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../assets/css/custom.css"> 
    <script src="https://code.jquery.com/jquery-3.0.0.js"></script><!--Validaciones-->
<!--<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script>-->
<!--Validacioness-->
<!--inicia validación-->


<title>Sesión Alumno</title>
<meta name="format-detection" content="telephone=no">
<meta name="viewport"
    content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!-- Stylesheets-->
<link rel="stylesheet" type="text/css"
    href="//fonts.googleapis.com/css?family=Poppins:400,500%7CTeko:300,400,500%7CMaven+Pro:500">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/fonts.css">
<link rel="stylesheet" href="css/style.css">

<head>
  <style type="text/css">

.portada{
    background: url(../images/fondohistoria.jpg) no-repeat fixed center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    height: 100%;
    width: 100% ;
    text-align: center;

}
.text{
margin: 50px 30px 0px -50px;  
padding: 60px;
background: rgba(0,0,0,0.5);
display: inline-block;
text-align: center;
}

  </style>
<!--inicia validación-->
<script type="text/javascript">


$(document).ready(function () {


	jQuery.validator.addMethod("formatoCorreo", function (value, element) {
		if (/^([a-zA-Z0-9_\.\-]|ñ|Ñ|)+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+([a-zA-Z0-9\.]{0,3})+$/.test(value)) {
			return true;
		} else {
			return false;
		};
	}, "Error: Caracteres inválidos o no tiene el formato: ejemplo@nombre.dominio" );

   
	$("#form1").validate({
		
		rules: {

		    	PROF_CORREO: {
				formatoCorreo: true,
				required: true
			}
			


			PROF_CONTRASEÑA: { 
				required: true,
				minlength: 8,
				maxlength: 12
			} 
		},
		messages:{
		    	PROF_CORREO: {
				formatoCorreo:"Debe tener formato ejemplo@dominio.ejemplo",
				required: "Se requiere correo"
			}
			
 ,

			PROF_CONTRASEÑA: { 
					required:"Contraseña requerida",
					minlength: "La contraseña debe tener de 8 a 12 caracteres",
					maxlength: "Ha excedido el máximo de 12 caracteres, verifique su contraseña"
			}

		}



	});	
	});
	

</script>
<!--termina validación -->
</head>

<body>

    <div class="page">

        <!-- Page Header-->
        <header class="section page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                    data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
                    data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed"
                    data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static"
                    data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static"
                    data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px"
                    data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button class="rd-navbar-toggle"
                                    data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!-- RD Navbar Brand-->
                                <div class="rd-navbar-brand"><a class="brand" href="../index.html"><img
                                            src="images/logo-cinteva.jpeg" alt="" width="229" height="43" /></a></div>
                            </div>
                            <div class="rd-navbar-main-element">
                                <div class="rd-navbar-nav-wrap">

                                    <!-- RD Navbar Search-->
                                    <!--<div class="rd-navbar-search">
                      <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                      <form class="rd-search" action="#" method="GET">
                        <div class="form-wrap">
                          <label class="form-label" for="rd-navbar-search-form-input">Search...</label>
                          <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off"/>
                        </div>
                        <button class="rd-search-form-submit fl-bigmug-line-search74" type="submit"></button>
                      </form>
                    </div>-->

                                    <!-- RD Navbar Nav-->
                                    <ul class="rd-navbar-nav">
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="../index.html">Inicio</a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="quiz.html">Quiz</a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="calificaciones.html">Ver
                                                Calificaciones</a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link"
                                                href="alumno_perfil.html">Administrar perfil</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="rd-navbar-project-hamburger" data-rd-navbar-toggle=".rd-navbar-main">
                                    <div class="project-hamburger"><span
                                            class="project-hamburger-arrow-top"></span><span
                                            class="project-hamburger-arrow-center"></span><span
                                            class="project-hamburger-arrow-bottom"></span></div>
                                    <div class="project-close"><span></span><span></span></div>
                                </div>
                            </div>
                            <div class="rd-navbar-project rd-navbar-classic-project">
                                <h4 class="text-spacing-50">Our Works</h4>
                                <div class="rd-navbar-project-content rd-navbar-classic-project-content">
                                    <div class="row" data-lightgallery="group">
                                        <div class="col-12">
                                            <!-- Thumbnail Classic-->
                                            <article class="thumbnail thumbnail-mary">
                                                <div class="thumbnail-mary-figure"><img
                                                        src="images/gallery-image-1-330x240.jpg" alt="" width="330"
                                                        height="240" />
                                                </div>
                                                <div class="thumbnail-mary-caption"><a
                                                        class="icon fl-bigmug-line-zoom60"
                                                        href="images/grid-gallery-4-1200x800-original.jpg"
                                                        data-lightgallery="item"><img
                                                            src="images/gallery-image-1-330x240.jpg" alt="" width="330"
                                                            height="240" /></a>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="col-12">
                                            <!-- Thumbnail Classic-->
                                            <article class="thumbnail thumbnail-mary">
                                                <div class="thumbnail-mary-figure"><img
                                                        src="images/gallery-image-2-330x240.jpg" alt="" width="330"
                                                        height="240" />
                                                </div>
                                                <div class="thumbnail-mary-caption"><a
                                                        class="icon fl-bigmug-line-zoom60"
                                                        href="images/fullwidth-masonry-gallery-10-1200x800-original.jpg"
                                                        data-lightgallery="item"><img
                                                            src="images/gallery-image-2-330x240.jpg" alt="" width="330"
                                                            height="240" /></a>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="col-12">
                                            <!-- Thumbnail Classic-->
                                            <article class="thumbnail thumbnail-mary">
                                                <div class="thumbnail-mary-figure"><img
                                                        src="images/gallery-image-3-330x240.jpg" alt="" width="330"
                                                        height="240" />
                                                </div>
                                                <div class="thumbnail-mary-caption"><a
                                                        class="icon fl-bigmug-line-zoom60"
                                                        href="images/fullwidth-gallery-4-1200x800-original.jpg"
                                                        data-lightgallery="item"><img
                                                            src="images/gallery-image-3-330x240.jpg" alt="" width="330"
                                                            height="240" /></a>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="col-12">
                                            <!-- Thumbnail Classic-->
                                            <article class="thumbnail thumbnail-mary">
                                                <div class="thumbnail-mary-figure"><img
                                                        src="images/gallery-image-4-330x240.jpg" alt="" width="330"
                                                        height="240" />
                                                </div>
                                                <div class="thumbnail-mary-caption"><a
                                                        class="icon fl-bigmug-line-zoom60"
                                                        href="images/masonry-gallery-4-1200x800-original.jpg"
                                                        data-lightgallery="item"><img
                                                            src="images/gallery-image-4-330x240.jpg" alt="" width="330"
                                                            height="240" /></a>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="col-12">
                                            <!-- Thumbnail Classic-->
                                            <article class="thumbnail thumbnail-mary">
                                                <div class="thumbnail-mary-figure"><img
                                                        src="images/gallery-image-5-330x240.jpg" alt="" width="330"
                                                        height="240" />
                                                </div>
                                                <div class="thumbnail-mary-caption"><a
                                                        class="icon fl-bigmug-line-zoom60"
                                                        href="images/fullwidth-masonry-gallery-6-1200x800-original.jpg"
                                                        data-lightgallery="item"><img
                                                            src="images/gallery-image-5-330x240.jpg" alt="" width="330"
                                                            height="240" /></a>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Breadcrumbs -->
        <div class="portada">
            <div class="text">
                <p style="color: red;font-size:20px;">Datos incorrectos</p>
                <h1 style="color: white;">Alumno<br>Iniciar Sesión</h1>
                <br><br>

                <div style="display: flex; justify-content: center;">
                    <form action="log_alum_php.php" name="form1" id="form1" class="fh5co-form animate-box" data-animate-effect="fadeIn"
                        method="post" onsubmit="return validar();" >

                            <input type="email" class="form-control" id="ALU_CORREO" name="ALU_CORREO"
                                placeholder="&#9000;Usuario" style="width:350px;font-size:15px;" required>
                            <br>
                            <input type="password" class="form-control" id="ALU_CONTRASEÑA" name="ALU_CONTRASEÑA"
                                placeholder="&#128272;Contraseña" style="width:350px;font-size:15px;" required minlength="8" maxlength="8" >
                                <br>
                        <input type="submit" value="Ingresar">
                    </form>
                </div>
            </div>
        </div>


                <!-- Global Mailform Output-->
                <div class="snackbars" id="form-output-global"></div>
                <!-- Javascript-->
                <script src="js/core.min.js"></script>
                <script src="js/script.js"></script>
                <!--inicia validación-->
                <script src="val_log_alu.js"></script>
                <!--termina validación -->

                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
                    integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
                    crossorigin="anonymous"></script>

</body>

</html>