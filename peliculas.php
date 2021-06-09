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
        <a href="<?php echo $_SERVER['PHP_SELF'] ?>?p=principal"><img src="imagenes/principal/pelismedia.png" /></a>
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
<?php
        if (isset($_SESSION['email'])) {

            echo "<h1>Bienvenido " . $nombre . "</h1>";
            echo "<h2></h2>";
        } else {
            echo "<h1>Desconectado. Haz LOGIN para chatear.</h1>";
            echo "<h2></h2>";
        }

        ?>

            <form id="form">
                <input type="text" placeholder="Buscar" id="buscar" class="buscar">
            </form>
        </div>
    </header>
    <div id="tags"></div>
    <div id="myNav" class="overlay">

        <!-- Botón que cierra el trailer -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <!-- Overlay del trailer -->
        <div class="overlay-content" id="overlay-content"></div>

        <a href="javascript:void(0)" class="arrow left-arrow" id="left-arrow">&#8656;</a>

        <a href="javascript:void(0)" class="arrow right-arrow" id="right-arrow">&#8658;</a>

    </div>
    <main id="main"></main>
    <div class="pagination">
        <div class="page" id="prev">Página anterior</div>
        <div class="current" id="current">1</div>
        <div class="page" id="next">Página siguiente</div>

    </div>

    <script src="javascript/peliculas.js"></script>
</body>

</html>