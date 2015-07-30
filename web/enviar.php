<!doctype html>
<html lang="es">
	<head>
		<title>Portafolio </title>
		<meta charset ="utf-8" />
		<link rel="stylesheet" href="static/css/estilo.css" >
		<link rel="stylesheet" href="static/css/normalize.css" >
		<script type="text/javascript" src="static/js/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="static/js/script.js"></script>

		<!--efecto lightbox-->

		<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
		<script type="text/javascript" src="static/js/jquery_min.js"></script>
		<script type="text/javascript" src="static/js/slimbox2.js"></script>
		<link rel="stylesheet" href="static/css/slimbox2.css" type="text/css" media="screen" />

		<!--efecto lightbox-->

	</head>
	<body>
			<header id="yo" class="Header">
				<nav class="MainMenu">
					<ul class="MainMenu-list">
						<li class="MainMenu-item">	
							<a class="MainMenu-link" href="#yo">Yo</a>
						</li>
						<li class="MainMenu-item">	
							<a class="MainMenu-link" href="#perfil">Perfil</a>
						</li>
						<li class="MainMenu-item">	
							<a class="MainMenu-link" href="#trabajo">Trabajo</a>
						</li>
						<li class="MainMenu-item">	
							<a class="MainMenu-link" href="#contacto">Contacto</a>
						</li>	

					</ul>
				</nav>
				<figure class="Header-imageContainer">
						<img src="static/images/avatar.jpg" alt="Imagen Personal" class="Header-image" />
				</figure>
				<figcaption>
					<a class="Header-link" href="https://twitter.com/tresnumbers/ " target="_black">@TresPanditas</a>
				</figcaption>
				<p class="Header-name">Tres Panditas</p>
			</header>

			<section id="perfil" class="Profile">
					<h2 class="Profile-title u-title">Mi Perfil</h2>
					<p class="Profile-description">
						Hola!, bienvenido a mi portafolio 	
					</p>

					<a class="Profile-link" href="https://twitter.com/tresnumbers/ " target="_black">@TresPanditas</a>
					<a class="Profile-link" href="https://www.facebook.com/robotech?fref=ts/ " target="_black">Tres Panditas</a>
					<a class="Profile-link" href="https://www.youtube.com/user/davizote3000/ " target="_black">Tres Panditas</a>
			</section>

			<section class="Slider">
					<div class="Slider-container">
						<ul class="rslides">
						  <li><img src="static/images/1.jpg" alt="Imagen 1" title="Imagen1" width="1024" height="400"></li>
						  <li><img src="static/images/2.jpg" alt="Imagen 2" title="Imagen2" width="1024" height="400"></li>
						  <li><img src="static/images/3.jpg" alt="Imagen 3" title="Imagen3" width="1024" height="400"></li>
						</ul>
					</div>
			</section>
			
			<section id="trabajo" class="Work">
					<h2 class="Work-title u-title">Mi Trabajo</h2>
					<article class="Work-item">
						<figure class="Work-imageContainer">
							<a href="static/images/imagen1.jpg" rel="lightbox"><img class="Work-image" src="static/images/imagen1.jpg" alt="Es la descripcion de mi imagen" width="245" height="245"></a>
							<figcaption class="Work-description">Website de un pandita</caption>
						</figure>	
					</article>
					<article class="Work-item">
						<figure class="Work-imageContainer">
							<a href="static/images/imagen2.jpg" rel="lightbox"><img class="Work-image" src="static/images/imagen2.jpg" alt="Es la descripcion de mi imagen" width="245" height="245" ></a>
							<figcaption class="Work-description">Website de un pandita</caption>
						</figure>	
					</article>
					<article class="Work-item">
						<figure class="Work-imageContainer">
							<a href="static/images/imagen3.jpg" rel="lightbox"><img class="Work-image" src="static/images/imagen3.jpg" alt="Es la descripcion de mi imagen" width="245" height="245"></a>
							<figcaption class="Work-description">Website de un pandita</caption>
						</figure>	
					</article>
					<article class="Work-item">
						<figure class="Work-imageContainer">
							<a href="static/images/imagen4.jpg" rel="lightbox"><img class="Work-image" src="static/images/imagen4.jpg" alt="Es la descripcion de mi imagen" width="245" height="245"></a>
							<figcaption class="Work-description">Website de un pandita</caption>
						</figure>	
					</article>
			</section>

		
			<footer id="contacto" class="Footer">
				  
						<h3 class="Footer-title">Contacto</h3>
						<p class="Footer-description">Cualquier sugerencia o consultas favor de enviarlo mediante este formulario</p>
				

				<form class="Footer-form" action="enviar.php" method="post">
				
					<input class="Footer-formInput" type="text" placeholder="Email" name="asunto"/>
					<textarea class="Footer-textarea" placeholder="Escriba su mensaje" name="mensaje"></textarea>
					<button type="submit" class="Footer-button" value="Enviar">Contactame</button>
				</form>

					<?php
	if(isset($_POST['asunto']) && !empty($_POST['asunto']) && 

	(isset($_POST['mensaje']) && !empty($_POST['mensaje']))

     {
	$destino ="roboteckperu@gmail.com";
	$desde  = "From: "."CeroVeinte";
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];


	mail($destino, $asunto, $mensaje, $desde );
	echo "Correo enviado..";
     } else {
	echo "Problemas al enviar";
	}

	?>

			</footer>

				<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
				<script src="static/js/responsiveslides.min.js"></script>

				<script>
			  		$(function() {
			   		$(".rslides").responsiveSlides();
			  		});
				</script>

	</body>
</html>
