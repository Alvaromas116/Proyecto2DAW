/*Con este script he creado el slider justo debajo del formulario*/
window.addEventListener('load', function () {
    console.log("funciona")
    var imagenes = [];

    imagenes[0] = "imagenes/Login/Slider/1.jpg"
    imagenes[1] = "imagenes/Login/Slider/2.png"
    imagenes[2] = "imagenes/Login/Slider/3.jpg"
    imagenes[3] = "imagenes/Login/Slider/4.png"
    imagenes[4] = "imagenes/Login/Slider/5.png"
    imagenes[5] = "imagenes/Login/Slider/6.png"
    imagenes[6] = "imagenes/Login/Slider/7.png"
    imagenes[7] = "imagenes/Login/Slider/8.png"
    imagenes[8] = "imagenes/Login/Slider/9.png"
	imagenes[9] = "imagenes/Login/Slider/10.jpg"



    var primeraImagen = 0;
    var tiempo = 1000;

    function cambiarImagenes() {
        document.slider.src = imagenes[primeraImagen];
        if (primeraImagen < 7) {
            primeraImagen++;
        } else {
            primeraImagen = 0;
        }
    }
    setInterval(cambiarImagenes, tiempo);
});


