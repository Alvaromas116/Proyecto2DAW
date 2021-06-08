<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="fontawesome/css/all.css" rel="stylesheet">
	<link rel="icon" sizes="32x32" href="imagenes/principal/p.png">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css" media="screen" />

	<title>Pelismedia</title>
</head>

<body>
	<header>
		<header class="header">
			<div class="hero">
				<img src="imagenes/principal/pelismedia.png" class="logo">

				<div class="login">
					<form>
						<h2>Iniciar sesión</h2>

						<input type="text" name="name" id="name" placeholder="Introduce el correo electrónico"
							autocomplete="off">
						<input type="password" name="password" id="password" placeholder="Introduce la contraseña">
						<input type="submit" value="Iniciar sesión">
					</form>


					<div class="footer-login">
						<p class="new">¿Nuevo en Pelismedia?<a href="registrarse.php">Registrarse</a>.</p>

						<i class="fas fa-chevron-left btn-icon"></i><a href="index.php" class="btn-icon"></i> Volver
							atrás</a>
					</div>
				</div>
			</div>
		</header>
	</header>

	<main>

		<div class="peliculas-recomendadas contenedor">
			<div class="contenedor-titulo-controles">
				<h3>Películas Recomendadas</h3>
				<div class="indicadores"></div>
			</div>

			<div class="contenedor-principal">
				<button role="button" id="flecha-izquierda" class="flecha-izquierda"><i
						class="fas fa-angle-left"></i></button>


				<div class="contenedor-slider">
					<div class="slider">

						<div class="pelicula">
							<a class="fancybox" href ="imagenes/Login/Slider/1.jpg" data-fancybox data-caption="Valerian y la Ciudad de los Mil Planetas"><img src="imagenes/Login/Slider/1.jpg" ></a>
						</div>
						<div class="pelicula">
							<a class="fancybox" href ="imagenes/Login/Slider/2.png" data-fancybox data-caption="Interestelar"><img src="imagenes/Login/Slider/2.png" ></a>
						</div>
						<div class="pelicula">
							<a class="fancybox" href ="imagenes/Login/Slider/3.jpg" data-fancybox data-caption="Terminator"><img src="imagenes/Login/Slider/3.jpg" ></a>
						</div>
						<div class="pelicula">
							<a class="fancybox" href ="imagenes/Login/Slider/4.png" data-fancybox data-caption="Top Gun"><img src="imagenes/Login/Slider/4.png" ></a>
						</div>
						<div class="pelicula">
							<a class="fancybox" href ="imagenes/Login/Slider/5.png" data-fancybox data-caption="Tron: Legacy"><img src="imagenes/Login/Slider/5.png" ></a>
						</div>
						<div class="pelicula">
							<a class="fancybox" href ="imagenes/Login/Slider/6.png" data-fancybox data-caption="The Dark Knight"><img src="imagenes/Login/Slider/6.png" ></a>
						</div>
						<div class="pelicula">
							<a class="fancybox" href ="imagenes/Login/Slider/7.png" data-fancybox data-caption="The Grey"><img src="imagenes/Login/Slider/7.png" ></a>
						</div>
						<div class="pelicula">
							<a class="fancybox" href ="imagenes/Login/Slider/8.png" data-fancybox data-caption="Marte"><img src="imagenes/Login/Slider/8.png" ></a>
						</div>
						<div class="pelicula">
							<a class="fancybox" href ="imagenes/Login/Slider/9.png" data-fancybox data-caption="Ready Player One"><img src="imagenes/Login/Slider/9.png" ></a>
						</div>
						<div class="pelicula">
							<a class="fancybox" href ="imagenes/Login/Slider/10.jpg" data-fancybox data-caption="Mulan"><img src="imagenes/Login/Slider/10.jpg" ></a>
						</div>

					</div>
				</div>

				<button role="button" id="flecha-derecha" class="flecha-derecha"><i
						class="fas fa-angle-right"></i></button>
			</div>
		</div>
	</main>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="javascript/jquery.fancybox.min.js"></script>
	<script src="javascript/login.js"></script>
</body>

</html>