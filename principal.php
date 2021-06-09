<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" sizes="32x32" href="imagenes/principal/p.png">
    <link rel="stylesheet" href="css/principal.css">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <title>Pelismedia</title>
</head>

<body>

    <!-- Header -->

    <header class="vista">
        <div class="vista-top">
            <img src="imagenes/principal/pelismedia.png" />
            <a href="<?php echo $_SERVER['PHP_SELF'] ?>?p=login" class="btn btn-rounded">Iniciar sesión</a>
        </div>
        <div class="vista-content">
            <h1>Todos los trailers de las películas y <br> series que desees
                y más</h1>
            <p>Disfruta donde quieras y cuando quieras</p>

            <a href="<?php echo $_SERVER['PHP_SELF'] ?>?p=peliculas" class="btn btn-xl">Acceder a Pelismedia<i
                    class="fas fa-chevron-right btn-icon"></i></a>
        </div>
    </header>

    <!-- Simbolos -->

    <section class="tabs">
        <div class="container">
            <div id="tab-1" class="tab-item tab-border">
                <i class="fas fa-question fa-3x"></i>
                <p class="hide-sm">Acerca de nosotros</p>
            </div>
            <div id="tab-2" class="tab-item">
                <i class="fas fa-tablet-alt fa-3x"></i>
                <p class="hide-sm">En cualquier dispositivo</p>
            </div>
            <div id="tab-3" class="tab-item">
                <i class="fas fa-star fa-3x"></i>
                <p class="hide-sm">Privilegios</p>
            </div>
        </div>
    </section>

    <section class="tab-content">
        <div class="container">

            <!-- Tab Content 1 -->

            <div id="tab-1-content" class="tab-content-item show">
                <div class="tab-1-content-inner">
                    <div>
                        <p class="texto-descripcion">
                        <h1>¿Qué es Pelismedia?</h1><br>
                        Pelismedia es una página web donde puedes ver los trailers de tus películas y<br>
                        series favoritas en cualquier dispositivo y en cualquier momento totalmente gratis<p></p>
                        <h2>¿A qué estás esperando?, entra en Pelismedia</h2>

                        </p>
                        <a href="<?php echo $_SERVER['PHP_SELF'] ?>?p=peliculas" class="btn btn-lg">Acceder a Pelismedia</a>
                    </div>
                    <img
                        src="https://estaticos.muyinteresante.es/media/cache/1140x_thumb/uploads/images/gallery/58402b605cafe8877e8b456c/peliculas.jpg" />
                </div>
            </div>

            <!-- Tab Content 2 -->

            <div id="tab-2-content" class="tab-content-item">
                <div class="tab-2-content-top">
                    <p class="texto-descripcion">
                        Mira los trailers de tus películas y series favoritas en el dispositivo que desees
                    </p>
                </div>
                <div class="tab-2-content-bottom">
                    <div>
                        <img src="https://i.ibb.co/DpdN7Gn/tab-content-2-1.png" class="imagenes-cont2" />
                        <p class="texto-blanco">
                            Míralo desde tu TV
                        </p>
                        <p class="texto-gris">
                            Smart TVs, PlayStation, Xbox, Chromecast, Apple TV, Blu-ray y más.
                        </p>
                    </div>
                    <div>
                        <img src="https://i.ibb.co/R3r1SPX/tab-content-2-2.png" class="imagenes-cont2" />
                        <p class="texto-blanco">
                            También disponible en móviles y tablets
                        </p>
                        <p class="texto-gris">
                            Podrás disfrutar allá donde vayas.
                        </p>
                    </div>
                    <div>
                        <img src="https://i.ibb.co/gDhnwWn/tab-content-2-3.png" class="imagenes-cont2" />
                        <p class="texto-blanco">
                            Utiliza cualquier ordenador para entrar en nuestra web
                        </p>
                        <p class="texto-gris">
                            Pelismedia.com
                        </p>
                    </div>
                </div>
            </div>

            <!-- Tab Content 3 -->

            <div id="tab-3-content" class="tab-content-item">
                <p class="texto-descripcion">
                    Privilegios de los usuarios
                </p>


                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Registrado</th>
                            <th>No Registrado</th>

                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>Buscar</td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>

                        </tr>
                        <tr>
                            <td>Ver trailers</td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-times"></i></td>

                        </tr>
                        <tr>
                            <td>Generar PDF</td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>

                        </tr>
                    </tbody>
                </table>
                <div class="text-center">
                
                <a href="<?php echo $_SERVER['PHP_SELF'] ?>?p=registrarse" class="btn btn-lg">REGISTRARSE</a><p></p>
                    <a href="#" class="btn btn-lg">Generar Listado de usuarios</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->

    <footer class="footer">
        <div class="footer-cols">
            <ul>
                <li><i class="fas fa-phone"></i> Contáctanos: 963 212 742</li>

                <li>© 2021 Pelismedia | Ver trailers de Películas y Series en HD Gratis.</li>

            </ul>

            <ul>
                <li>Síguenos en nuestras redes sociales para estar al tanto:</li>
                <li><i class="fab fa-facebook"></i><a href="facebook.com/pelismedia"> fb.com/pelismedia </a> <i
                        class="fab fa-twitter"></i><a href="twitter.com/pelismedia"> tw.com/pelismedia</a></li>


            </ul>
        </div>

    </footer>
</body>
<script src="javascript/principal.js"></script>

</html>