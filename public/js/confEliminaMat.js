function confirmaBorrado() {
    var id = this.getAttribute('data-material');
    if(confirm('¿Borrar contenido seleccionado?')){
     window.location.href = 'portada.php?eliminaContenido&idEli='+id;   
    }
};

document.addEventListener('DOMContentLoaded', function(){
    var buttons = document.querySelectorAll('button[data-material]');
    buttons.forEach(function(button){
        button.addEventListener('click',confirmaBorrado);
    })
    // Manejar botón de eliminar cuenta
    var botonEliminarCuenta = document.getElementById('eliminarCuenta');
    if (botonEliminarCuenta) {
        botonEliminarCuenta.addEventListener('click', eliminarCuenta);
    }
});