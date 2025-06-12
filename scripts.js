// Ejemplo de una funcionalidad simple que muestra una alerta cuando el formulario es enviado.
document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();  // Evitar el envío del formulario de manera tradicional
    alert('¡Gracias por tu mensaje! Nos pondremos en contacto contigo pronto.');
    this.reset(); // Limpiar el formulario después del envío
});
