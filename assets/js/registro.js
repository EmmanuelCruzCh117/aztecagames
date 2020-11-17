$(document).ready(function() {
    $("#btnRegistro").click(function(e) {
        e.preventDefault();
        mostrarDato();
    });

    async function mostrarDato() {
        const datos = new FormData(document.getElementById('formulario'));
        await fetch('assets/data/registro_conexion.php', {
            method: 'POST',
            body: datos
        })
    }
});