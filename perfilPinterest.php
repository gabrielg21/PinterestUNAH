<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<script src="jquery-3.2.1.min.js"></script>
	<script src="masonry.js"></script>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<link href="css/estiloperfil.css" rel="stylesheet">
		<title>Pinterest</title>
	<link rel="icon" href="img/favicon-pinterest.png">	
</head>

<body>
<!--<img src="pinterest.gif" width="30" height="30" class="margenes" >-->
<!--<div>
	
<<<<<<< HEAD
	   <button type="button" class=" btn btn-default cambiacolor"  style="margin-left: 20px; font-weight:bold; ">
	   	 <img src="img/logo.png" height="34" width="34"><br><p class="tamaño">Inicio</p>
	   </button>
=======
	  <a href="pinterest.html"> <button type="button" class=" btn btn-default cambiacolor"  style="margin-left: 20px;">
	   	<img src="img/logo.png" height="34" width="34"><br><p class="tamaño">Inicio</p>
	   </button></a> 
>>>>>>> origin/master
	
	
	<input type="text" name="search" id=search placeholder="Buscar" class="input">
	
	
	<button type="button" class="btn btn-default cambiacolor" >
		<i style="color:#969696" class="fa fa-navicon fa-2x "><br><p style="font-family: helvetica; font-weight:bold; " class="tamaño">Categorias</p></i>
	</button>
	
	
	<button type="button" class="btn btn-default cambiacolor" >
		<i style="color:#969696" class="fa fa-user fa-2x "><br><p style="font-family: helvetica;font-weight: bold;" class="tamaño">Guardado</p></i>
	</button>
	
	
	<button type="button" class="btn btn-default cambiacolor" >
		<i style="color:#969696" class="fa fa-commenting fa-2x "><br><p style="font-family: helvetica;font-weight: bold;" class="tamaño">Notificaciones</p></i>
	</button>

<br>
	<hr style="margin-top: -2px">
</div>-->
 <nav class="navbar navbar-default navbar-fixed-top" style="background-color: #FFFFFF;">
      <div class="container" style="margin-left: 0px;margin-right: 0px; width: auto;height: 60px;">
        <div class="navbar-header">
          <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>-->
          <a class="navbar-brand" href="pinterest.php"><img src="img/logo.png" height="38" width="38" style="margin-left: 15px;"></a>
          <input type="text" name="search" id=search placeholder="Buscar" style="font-weight: bold; width: 750px;" class="input" >
        </div>
        <div id="navbar" class="navbar-collapse collapse" style="margin-right: 40px;">
          <ul class="nav navbar-nav  navbar-right">
            <li class="btn btn-default" style="font-size: 20px; font-weight: bold;"><a href="pinterest.php" class="" type="button">Inicio</a></li>
            <li class="btn btn-default" style="font-size: 20px; font-weight: bold;"><a href="perfilPinterest.php"><img src="img/Rose-shield2.png" height="25" width="25">Perfil</a></li>

            <li class="dropdown" ">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/categoriasreal.png"> <span class=""></span></a>
              <ul class="dropdown-menu" style=" -moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px; font-weight:bolder;font-family: Helvetica;">
                <li><a href="#">Mobile Suit Gundam </a></li>
                <li><a href="#">Arte</a></li>
                <li><a href="#">POO</a></li>
                <li><a href="#">Cartoons</a></li>
                <li><a href="#">Educacion</a></li>
                <li><a href="#">Entretenimiento</a></li>
                <li><a href="#">Deportes</a></li>
                <li><a href="#">Mundo Geek</a></li>
                <li><a href="#">Memes</a></li>
                <li><a href="#">Animales y Mascotas</a></li>
                <li><a href="#">Tegnologia</a></li>
              </ul>

            </li>
            <li class="dropdown ">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/notificacionreal.png"> <span class=""></span></a>
              <ul class="dropdown-menu " style=" -moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px; ">
                <li><a href="#">Notificaciones</a></li>

                <li role="separator" class="divider"></li>

              </ul>
              
            </li>
            <li class="dropdown " >
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/3puntosreal.png"><span class=""></span></a>
              <ul class="dropdown-menu " style=" -moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px; font-weight: bold;font-size: 20px; ">
                <li><a href="#">Configuracion</a></li>
               
                <li role="separator" class="divider"></li>

                <li><a href="#">Centro de Asistencia</a></li>
                <li><a href="#">Cambiar a una cuenta para empresas</a></li>
                <li><a href="#">Terminos y Privacidad</a></li>
                 <li role="separator" class="divider"></li>
                <li><a href="cerrarSesion.php">Salir</a></li>
              </ul>
              
            </li>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<div style="margin: 100px 270px">
		<!--<button type="button" class="btn btn-default cambiacolor" >
			<i style="color:#969696"><br><span class=" glyphicon glyphicon-wrench" ></span><p style="font-family: helvetica;font-weight: bold;" class="tamaño"></p></i>
		</button>
			
		<button type="button" class="btn btn-default cambiacolor" >
			<i style="color:#969696"><br><span class=" glyphicon glyphicon-open"></span><p style="font-family: helvetica;font-weight: bold;" class="tamaño"></p></i>
		</button>

		<button type="button" class="btn btn-default cambiacolor" >
			<i style="color:#969696"><br><span class=" glyphicon glyphicon-option-horizontal"></span><p style="font-family: helvetica;font-weight: bold;" class="tamaño"></p></i>
		</button>-->

			<p class="nombre-usuario">
				<?php

                 echo $_SESSION["nombre_persona"];
				?>
			</p>

			<p style=" margin: -40px 300px 0px 350px; color: grey; opacity: 0.7; font-size: 16px;"><b> seguidores &nbsp siguiendo</b></p>

			<span><img 
				<?php
                         echo 'src="img/perflies/'.$_SESSION["url_foto_perfl"].'"';
			          ?>
			 width="190" height="190" class="redondo"></span>

		<button class="boton-personalizado">Tableros</button>
		<button class="boton-personalizado">Pines</button>

	
		</div>
		<br><br><br>
		<div class="cuadrado"><img src="img/cruz.png" height="60" width="45" style="margin: 80px 125px">
			<b style="margin: -10px 10px; font-size: 20px; color: #ACACAC">Crear tablero</b>
		</div> 

	<script>
			var container = document.querySelector('.contenedor');
			var msnry = new Masonry( container, {
			  // options
			  itemSelector: '.elemento'
			});
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>