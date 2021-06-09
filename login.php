<?php

require("conexion.php");
session_start();

$email = "";
$pass = "";

if (isset($_POST['login'])) {

	$email = $_POST['email'];
	$pass = $_POST['pass'];

	$conexion = conectarBD();

	$sql = "select count(*) from usuarios where email='$email' and pass='$pass'";
	$res = $conexion->query($sql);
	$array = $res->fetch_array();


	$sql = "select distinct id_usr from usuarios where email='$email'";
	$res = $conexion->query($sql);
	$ID = $res->fetch_array();

	$id = $ID[0];

	$res = $conexion->query("select distinct nombre from usuarios where id_usr='$ID[0]'");
	$nombre = $res->fetch_array();

	$nom = $nombre[0];
	$res->free();


	if ($array[0] != 0) {

		$_SESSION['email'] = $email;
		$_SESSION['nombre'] = $nom;
		$_SESSION['id'] = $id;

		header("Location:index.php?p=peliculas");
		exit;
	} else {
		
		$log[3] = "Los datos son incorrectos";
	}

	if ($conexion->error != "") {
		echo "Error: La ejecución de la consulta falló debido a: \n";
		echo "Query: " . $sql . "<br>\n";
		echo "Errno: " . $conexion->errno . "<br>\n";
		echo "Error: " . $conexion->error . "<br>\n";
		exit;
	}
}

?>

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

					<form action="index.php?p=login" method="post">

						<h2>Iniciar sesión</h2>
						<input type="text" name="email" value="<?php echo $email ?>" placeholder="Introduce el correo electrónico">

						<input type="password" name="pass" value="<?php echo $pass ?>" placeholder="Introduce la contraseña">

						<input type="submit" name="login" value="Iniciar sesión">
					</form>

					<?php
					if (isset($_POST['login'])) {
						if (!empty($log)) {
							echo " <div id='errores'>";
							foreach ($log as $clave => $value) {
								echo $value . "<br>";
							}
							echo "</div>";
						}
					}
					?>



					<div class="footer-login">
						<p class="new">¿Nuevo en Pelismedia?<a href="<?php echo $_SERVER['PHP_SELF'] ?>?p=registrarse">Registrarse</a>.</p>

						<i class="fas fa-chevron-left btn-icon"></i><a href="<?php echo $_SERVER['PHP_SELF'] ?>?p=principal" class="btn-icon"></i> Volver
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
				<button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>


				<div class="contenedor-slider">
					<div class="slider">

						<div class="pelicula">
							<a class="fancybox" href="imagenes/Login/Slider/1.jpg" data-fancybox data-caption="Valerian y la Ciudad de los Mil Planetas"><img src="imagenes/Login/Slider/1.jpg"></a>
						</div>
						<div class="pelicula">
							<a class="fancybox" href="imagenes/Login/Slider/2.png" data-fancybox data-caption="Interestelar"><img src="imagenes/Login/Slider/2.png"></a>
						</div>
						<div class="pelicula">
							<a class="fancybox" href="imagenes/Login/Slider/3.jpg" data-fancybox data-caption="Terminator"><img src="imagenes/Login/Slider/3.jpg"></a>
						</div>
						<div class="pelicula">
							<a class="fancybox" href="imagenes/Login/Slider/4.png" data-fancybox data-caption="Top Gun"><img src="imagenes/Login/Slider/4.png"></a>
						</div>
						<div class="pelicula">
							<a class="fancybox" href="imagenes/Login/Slider/5.png" data-fancybox data-caption="Tron: Legacy"><img src="imagenes/Login/Slider/5.png"></a>
						</div>
						<div class="pelicula">
							<a class="fancybox" href="imagenes/Login/Slider/6.png" data-fancybox data-caption="The Dark Knight"><img src="imagenes/Login/Slider/6.png"></a>
						</div>
						<div class="pelicula">
							<a class="fancybox" href="imagenes/Login/Slider/7.png" data-fancybox data-caption="The Grey"><img src="imagenes/Login/Slider/7.png"></a>
						</div>
						<div class="pelicula">
							<a class="fancybox" href="imagenes/Login/Slider/8.png" data-fancybox data-caption="Marte"><img src="imagenes/Login/Slider/8.png"></a>
						</div>
						<div class="pelicula">
							<a class="fancybox" href="imagenes/Login/Slider/9.png" data-fancybox data-caption="Ready Player One"><img src="imagenes/Login/Slider/9.png"></a>
						</div>
						<div class="pelicula">
							<a class="fancybox" href="imagenes/Login/Slider/10.jpg" data-fancybox data-caption="Mulan"><img src="imagenes/Login/Slider/10.jpg"></a>
						</div>

					</div>
				</div>

				<button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
			</div>
		</div>
	</main>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="javascript/jquery.fancybox.min.js"></script>
	<script src="javascript/login.js"></script>
</body>

</html>