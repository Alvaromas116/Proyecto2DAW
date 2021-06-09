<?php
session_start();
require("conexion.php");

?>

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
                    <form method="post">
                    <h2>Registrarse</h2>

                        <input type="text" name="email" placeholder="Introduce el correo electrónico">

                        <input type="text" name="nombre" placeholder="Introduce el nombre de usuario">
                 
                        <input type="password" name="pass"placeholder="Introduce la contraseña">

                        <input type="password" name="pass2" id="password" placeholder="Repite la contraseña">
                        
                        <h6>*Es obligatorio completar todos los campos</h6>

                        <input type="submit" name="Registrarse" value="Registrarse">
                    </form>
                    <?php
                    $nombre = "";
                    $email = "";
                    $pass = "";
                    $pass2 = "";
                    if (isset($_POST['Registrarse'])) {
                        if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['pass']) >= 1 && strlen($_POST['pass']) == strlen($_POST['pass2'])) {
                            $nombre = trim($_POST['nombre']);
                            $email = trim($_POST['email']);
                            $pass = trim($_POST['pass']);
                            $pass2 = trim($_POST['pass2']);
                            if ($email != correoCorrecto($email)) {
                                echo "<p>Email Incorrecto<p>";
                            } else {
                                $conex = mysqli_connect("localhost", "root", "", "chat");
                                $consulta = "INSERT INTO usuarios(nombre, email, pass) VALUES ('$nombre','$email','$pass')";
                                $resultado = mysqli_query($conex, $consulta);
                                header("Location:index.php?p=login");
                            }
                        } else {
                            echo "<p>Hay campos incorrectos<p>";
                        }
                    }

                    function correoCorrecto($str)
                    {
                        if (preg_match('/^[(a-z0-9\_\-\.)]+@[(a-z0-9\_\-\.)]+\.[(a-z)]{2,15}$/i', $str))
                            return true;
                        else
                            return false;
                    }
                    ?>


                    <div class="footer-signin">
                        <p class="new">¿Ya tienes cuenta?<a href="<?php echo $_SERVER['PHP_SELF'] ?>?p=login">Iniciar sesión</a>.</p>


                        <i class="fas fa-chevron-left btn-icon"></i><a href="<?php echo $_SERVER['PHP_SELF'] ?>?p=principal" class="btn-icon"></i> Volver
                            al inicio</a>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="javascript/jquery.fancybox.min.js"></script>
    <script src="javascript/registrarse.js"></script>
</body>

</html>