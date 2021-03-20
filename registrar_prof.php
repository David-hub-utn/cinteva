<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../assets/css/custom.css"> 
    <script src="https://code.jquery.com/jquery-3.0.0.js"></script><!--Validaciones-->
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script><!--Validacioness-->
<!--inicia validación-->

 
    <title>Registro de Profesor</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:400,500%7CTeko:300,400,500%7CMaven+Pro:500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container"><span></span><span></span><span></span><span></span>
        </div>
      </div>
    </div>
    <div class="page">

      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="index.html"><img src="images/logo-cinteva.jpeg" alt="" width="229" height="43"/></a></div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">

                    <!-- RD Navbar Search-->
                    <div class="rd-navbar-search">
                      <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                      <form class="rd-search" action="#" method="GET">
                        <div class="form-wrap">
                          <label class="form-label" for="rd-navbar-search-form-input">Search...</label>
                          <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off"/>
                        </div>
                        <button class="rd-search-form-submit fl-bigmug-line-search74" type="submit"></button>
                      </form>
                    </div>
                   
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item"><a class="rd-nav-link" href="index.html">Inicio</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="quiz.html">Quiz</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="calificaciones.html">Ver Calificaciones</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="alumno_perfil.html">Administrar perfil</a>
                      </li>
                    </ul>
                  </div>
                  
                  <div class="rd-navbar-project-hamburger" data-rd-navbar-toggle=".rd-navbar-main">
                    <div class="project-hamburger"><span class="project-hamburger-arrow-top"></span><span class="project-hamburger-arrow-center"></span><span class="project-hamburger-arrow-bottom"></span></div>
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
                          <div class="thumbnail-mary-figure"><img src="images/gallery-image-1-330x240.jpg" alt="" width="330" height="240"/>
                          </div>
                          <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-4-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-1-330x240.jpg" alt="" width="330" height="240"/></a>
                          </div>
                        </article>
                      </div>
                      <div class="col-12">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-mary">
                          <div class="thumbnail-mary-figure"><img src="images/gallery-image-2-330x240.jpg" alt="" width="330" height="240"/>
                          </div>
                          <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/fullwidth-masonry-gallery-10-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-2-330x240.jpg" alt="" width="330" height="240"/></a>
                          </div>
                        </article>
                      </div>
                      <div class="col-12">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-mary">
                          <div class="thumbnail-mary-figure"><img src="images/gallery-image-3-330x240.jpg" alt="" width="330" height="240"/>
                          </div>
                          <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/fullwidth-gallery-4-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-3-330x240.jpg" alt="" width="330" height="240"/></a>
                          </div>
                        </article>
                      </div>
                      <div class="col-12">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-mary">
                          <div class="thumbnail-mary-figure"><img src="images/gallery-image-4-330x240.jpg" alt="" width="330" height="240"/>
                          </div>
                          <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/masonry-gallery-4-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-4-330x240.jpg" alt="" width="330" height="240"/></a>
                          </div>
                        </article>
                      </div>
                      <div class="col-12">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-mary">
                          <div class="thumbnail-mary-figure"><img src="images/gallery-image-5-330x240.jpg" alt="" width="330" height="240"/>
                          </div>
                          <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/fullwidth-masonry-gallery-6-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-5-330x240.jpg" alt="" width="330" height="240"/></a>
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
      <section class="breadcrumbs-custom-inset">
    <div class="container">
    <h1>REGISTAR PROFESOR</h1>
<br><br>
	<div>
        <ul> 	
		
				
					<div class='well'>
					<!-- Start Sign In Form -->
					<form action="add_prof.php" class="fh5co-form animate-box" data-animate-effect="fadeIn" name="form1" id="form1" method="post" >
						
						<div class="form-group">
						<input type="text" class="form-control" id="PROF_NOMBRE" name="PROF_NOMBRE" placeholder="Nombre" autocomplete="off">
						</div>
						
						<div class="form-group">
							<input type="text" class="form-control" id="PROF_APP" name="PROF_APP" placeholder="Apellido Paterno" autocomplete="off">
						</div>
						
						<div class="form-group">
						<input type="text" class="form-control" id="PROF_APM" name="PROF_APM" placeholder="Apellido Materno" autocomplete="off">
						</div>
						
						<div class="form-group">
						<input type="text" class="form-control" id="PROF_CORREO" name="PROF_CORREO" placeholder="Correo" autocomplete="off">
						</div>
						
						<div class="form-group">
						<input type="text" class="form-control" id="PROF_CONTRASEÑA" name="PROF_CONTRASEÑA" placeholder="Contraseña" autocomplete="off">
						</div>
						
						<br>
						    <div class="form-control">
							<select name="GRUPO_ID"  id="GRUPO_ID">
						    
							<option disabled selected value>--Seleccionar grupo que le asignará al profesor--</option>
							<br>
                            <?php
                            $mysqli = new mysqli('localhost', 'u774797842_cinteva', '12345678', 'u774797842_cinteva');
                            
                            $query = $mysqli -> query ("SELECT * FROM grupo");                   
                            while ($valores = mysqli_fetch_array($query)) {                       
                            echo '<option vPREe=" ">'.$valores[GRUPO_NOMBRE].'</option>';
                            }
                            ?>
                            </select>
                            </div>
                                                        
						    
                            
                            <button type="submit" class="btn btn-green" value="submit">Registrar</button>
					</form>
					
					<!-- END Sign In Form -->							
					</div>
        
       
        <ul>
           
<br>



	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="assets/js/breakpoints.min.js"></script><!--Menú emergente-->
      
<br><br><br>
 <hr>


<footer>
        <div class="container footer-bottom-panel wow fadeInUp">
          <!-- Rights-->
          <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span> <span>Creator</span>. All rights reserved. <span> Design&nbsp;by&nbsp;<a href="https://www.templatemonster.com">TemplateMonster</a></span>
          </p>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>