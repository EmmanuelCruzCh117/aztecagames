$(document).ready(function() {
    $("#btnComentarios").click(function(e) {
        e.preventDefault();
        mostrarDato();
    });

    async function mostrarDato() {
        const datos = new FormData(document.getElementById('infocontacto'));
        await fetch('assets/data/comentarios_conexion.php', {
            method: 'POST',
            body: datos
        })
    }
});