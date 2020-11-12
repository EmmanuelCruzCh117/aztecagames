$(document).ready(function() {
    $("#btnRegistro").click(function(e) {
        e.preventDefault();
        mostrarDato();
    });

    async function mostrarDato() {
        const datos = new FormData(document.getElementById('registro'));
        await fetch('assets/data/registro.php', {
            method: 'POST',
            body: datos
        })
    }
});