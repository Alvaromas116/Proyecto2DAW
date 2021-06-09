const fila = document.querySelector('.contenedor-slider');
const peliculas = document.querySelectorAll('.pelicula');




// ? ----- ----- Paginacion ----- -----
const numeroPaginas = Math.ceil(peliculas.length / 5);
for (let i = 0; i < numeroPaginas; i++) {
	const indicador = document.createElement('button');

	if (i === 0) {
		indicador.classList.add('activo');
	}

	document.querySelector('.indicadores').appendChild(indicador);
	indicador.addEventListener('click', (e) => {
		fila.scrollLeft = i * fila.offsetWidth;

		document.querySelector('.indicadores .activo').classList.remove('activo');
		e.target.classList.add('activo');
	});
}

// ? ----- ----- Hover ----- -----
peliculas.forEach((pelicula) => {
	pelicula.addEventListener('mouseenter', (e) => {
		const elemento = e.currentTarget;
		setTimeout(() => {
			peliculas.forEach(pelicula => pelicula.classList.remove('hover'));
			elemento.classList.add('hover');
		}, 300);
	});
});

fila.addEventListener('mouseleave', () => {
	peliculas.forEach(pelicula => pelicula.classList.remove('hover'));
});
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


// ? ----- ----- FancyBox  BORRAR  ----- ----- 





$(document).ready(function () {
	$('.fancybox').fancybox({ keyboard: true });

});

(function (i, s, o, g, r, a, m) {
	i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
		(i[r].q = i[r].q || []).push(arguments)
	}, i[r].l = 1 * new Date(); a = s.createElement(o),
		m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
ga('create', 'UA-74824848-1', 'auto');
ga('send', 'pageview');



