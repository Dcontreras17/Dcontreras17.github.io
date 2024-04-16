// script.js

window.onload = function() {
    // Verificar si la variable de sesión 'mensaje' está definida
    if (typeof mensaje !== 'undefined') {
        // Mostrar una alerta con el contenido de la variable de sesión 'mensaje'
        alert(mensaje);
        // Limpiar la variable de sesión 'mensaje'
        mensaje = undefined;
    }
};
