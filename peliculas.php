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
            <a  href="index.php"><img src="imagenes/principal/pelismedia.png" /></a>
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