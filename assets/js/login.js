$(document).ready(function() {
    $("btnLogin").click(function(e) {
        e.preventDefault();
        mostrarDato();
    });

    async function mostrarDato() {
        const datos = new FormData(document.getElementById('login'));
        await fetch('assets/data/login_conexion.php', {
            method: 'POST',
            body: datos
        })
    }
});