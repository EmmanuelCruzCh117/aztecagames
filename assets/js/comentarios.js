$(document).ready(function() {
    $("#btnComentarios").click(function(e) {
        e.preventDefault();

        var nom = $("#comNombre").val().trim();
        var email = $("#comCorreo").val().trim();
        var tel = $("#comTelefono").val().trim();
        var com = $("#comComentario").val().trim();

        console.log(nom + " " + email + " " + tel + " " + com);

        registrarComent();
    });

    async function registrarComent() {
        const datos = new FormData(document.getElementById('comentarios'));

        await fetch('assets/data/comentarios_conexion.php', {
                method: 'POST',
                body: datos
            }).then(response => response.json())
            .then(response => {
                if (response.dato == 'ok') {
                    location.href = "comentario.html";
                } else {
                    alert("Datos incorrectos :(");
                }
            })
            .catch(err => {
                console.log(err);
            });
    }
});