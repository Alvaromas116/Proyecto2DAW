<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link rel="icon" sizes="32x32" href="imagenes/principal/p.png">
    <link rel="stylesheet" href="css/registrarse.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css" media="screen" />

    <title>Pelismedia</title>
</head>

<body>
    <header>
        <header class="header">
            <div class="hero">
                <img src="imagenes/principal/pelismedia.png" class="logo">

                <div class="signin">
                    <form>
                        <h2>Registrarse</h2>

                        <input type="text" name="name" id="name" placeholder="Introduce el correo electrónico"
                            autocomplete="off">
                        <input type="text" name="name" id="name" placeholder="Introduce el correo electrónico"
                            autocomplete="off">

                        <input type="password" name="password" id="password" placeholder="Introduce la contraseña">
                        <input type="password" name="password" id="password" placeholder="Repite la contraseña">

                        <input type="submit" value="Registrarse">
                    </form>


                    <div class="footer-signin">
                        <p class="new">¿Ya tienes cuenta?<a href="login.php">Iniciar sesión</a>.</p>

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
            </div>
            <div class="contenedor-slider">
                <div class="slider">
                    <img src="imagenes/Login/Slider/1.jpg" name="slider" width="100%" height="auto">
                </div>
            </div>
        </div>

    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="javascript/jquery.fancybox.min.js"></script>
    <script src="javascript/registrarse.js"></script>
</body>

</html>