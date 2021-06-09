<?php
session_start();
require("conexion.php");
$conexion = conectarBD();

if (isset($_SESSION['email'])) {

    $email = $_SESSION['email'];
} else {
    $email = "";
}
if (isset($_SESSION['nombre'])) {
    $nombre = $_SESSION['nombre'];
} else {
    $nombre = "";
}

if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" sizes="32x32" href="imagenes/principal/p.png">
    <link rel="stylesheet" href="css/peliculas.css">
    <title>Pelismedia</title>
</head>

<body>
    <header>
        <div class="vista-top">

            <form id="form">

                <input type="text" placeholder="Buscar" id="buscar" class="buscar">

            </form>
            <img src="imagenes/principal/pelismedia.png" />
            <nav>
                <ul>
                    <?php
                    if (isset($_SESSION['email'])) {
                        echo "<li><a href=" . $_SERVER['PHP_SELF'] . "?p=logout>Cerrar Sesión</a></li>";
                        echo "<li><a href=" . $_SERVER['PHP_SELF'] . "?p=modificar>Modificar Usuario</a></li>";
                    } else {
                        echo  "<li><a href=" . $_SERVER['PHP_SELF'] . "?p=login>Iniciar Sesión</a></li>";
                        echo "<li><a href=" . $_SERVER['PHP_SELF'] . "?p=principal>Volver al Inicio</a></li>";
                    }

                    ?>

                </ul>
            </nav>



        </div>
    </header>
    <div id="tags"></div>
    <div id="myNav" class="overlay">



        <!-- Botón que cierra el trailer */ -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <!-- Overlay del trailer -->
        <div class="overlay-content" id="overlay-content"></div>';

        <a href="javascript:void(0)" class="arrow left-arrow" id="left-arrow">&#8656;</a>

        <a href="javascript:void(0)" class="arrow right-arrow" id="right-arrow">&#8658;</a>


    </div>
    <?php
    if (isset($_SESSION['email'])) {
        echo '<main id="main"></main>';
        echo '<div class="pagination">';
        echo '<div class="page" id="prev">Página anterior</div>';
        echo '<div class="current" id="current">1</div>';
        echo '<div class="page" id="next">Página siguiente</div>';
        echo '</div>';
    } else {
        echo '<h1> DEBES INICIAR SESIÓN PARA VER LOS TRAILERS';
    }
    ?>
    <script src="javascript/peliculas.js"></script>
</body>

</html>