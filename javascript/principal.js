const tabItems = document.querySelectorAll('.tab-item');
const tabContentItems = document.querySelectorAll('.tab-content-item');

// Selecciona un item
function selectItem(e) {
	// Elimina todas las clases de show y border
	removeBorder();
	removeShow();
	// Agrega borde al elemento de pestaña actual
	this.classList.add('tab-border');
	// Coge el elemento de contenido de DOM
	const tabContentItem = document.querySelector(`#${this.id}-content`);
	// Agrega la clase show
	tabContentItem.classList.add('show');
}

// Borra todos los bordes de los items
function removeBorder() {
	tabItems.forEach(item => {
		item.classList.remove('tab-border');
	});
}

// Elimina el subrayado del item no seleccionado
function removeShow() {
	tabContentItems.forEach(item => {
		item.classList.remove('show');
	});
}

// Selecciona el item cliqueado
tabItems.forEach(item => {
	item.addEventListener('click', selectItem);
});

