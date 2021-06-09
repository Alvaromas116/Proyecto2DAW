<?php
session_start();
require("conexion.php");

function datosCorrectos($info)
{
    $errores = array();

    if (empty(trim($info['nombre'])) || empty(trim($info['email'])) || empty(trim($info['pass'])) || empty(trim($info['pass2']))) {
        $errores[0] = "<h4>Hay campos vacíos</h4>";
    }
    if ($info['pass'] != $info['pass2']) {
        $errores[1] = "<h4>Error al repetir la contraseña</h4>";
    }

    return $errores;
}

$nombre = "";
$email = "";


if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
}
if (isset($_SESSION['nombre'])) {
    $nombre = $_SESSION['nombre'];
}

if (isset($_POST['modificar'])) {

    $info = datosCorrectos($_POST);

    $nombre = $_POST['nombre'];

    $pass = $_POST['pass'];

    if (empty($info)) {
        $conexion = conectarBD();
        $sql = "update usuarios set nombre='$nombre' where email='$email'";
        $res = $conexion->query($sql);

        $sql = "update usuarios set pass='$pass' where email='$email'";
        $res = $conexion->query($sql);

        if ($conexion->error != "") {
            echo "Error: La ejecución de la consulta falló debido a: \n";
            echo "Query: " . $sql . "<br>\n";
            echo "Errno: " . $conexion->errno . "<br>\n";
            echo "Error: " . $conexion->error . "<br>\n";
            exit;
        }
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
    <link rel="stylesheet" href="css/modificar.css">

    <title>Pelismedia</title>
</head>

<body>
    <header>
        <header class="header">
            <div class="hero">
                <img src="imagenes/principal/pelismedia.png" class="logo">

                <div class="signin">
                    <form action="index.php?p=modificar" method="post">
                        <h2>Modificar</h2>

                        <input type="text" name="email" maxlength="30" value="<?php echo $email ?>" placeholder="Introduce el correo electrónico">

                        <input type="text" name="nombre" maxlength="10" size="10" value="<?php echo $nombre ?>" placeholder="Introduce el nombre de usuario">

                        <input type="password" name="pass" maxlength="10" value="" placeholder="Introduce nueva contraseña">

                        <input type="password" name="pass2" maxlength="10" value="" placeholder="Repite la contraseña">

                        <h6>*Es obligatorio completar todos los campos</h6>

                        <input type="submit" value="Modificar" name="modificar">
                    </form>
                    <?php
                    if (isset($_POST['modificar'])) {
                        if (!empty($info)) {
                            echo " <div id='errores'>";
                            foreach ($info as $clave => $value) {
                                echo $value . "<br>";
                            }
                            echo "</div>";
                        } else {
                            echo " <div id='errores'>";

                            echo "Usuario $email modificado correctamente";

                            echo "</div>";
                        }
                    }

                    ?>
                    <div class="footer-signin">

                        <i class="fas fa-chevron-left btn-icon"></i><a href="<?php echo $_SERVER['PHP_SELF'] ?>?p=peliculas" class="btn-icon"></i> Volver
                            a películas</a>
                    </div>
                </div>
            </div>
        </header>
    </header>
                    


</html>