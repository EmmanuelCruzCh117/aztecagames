$(document).ready(function() {
    $("#btnComentarios").click(function(e) {
        e.preventDefault();

        var name = $("#comNombre").val().trim();
        var email = $("#comCorreo").val().trim();
        var tel = $("#comTelefono").val().trim();
        var msg = $("#comComentario").val().trim();

        console.log(name + " " + email + " " + tel + " " + msg);

        registrarComentario();

    });


    async function registrarComentario() {
        const datos = new FormData(document.getElementById('comentarios'));

        await fetch('assets/data/comentarios_conexion.php', {
                method: 'POST',
                body: datos
            })
            .then(response => response.json())
            .then(response => {
                //console.log(response.datos);
                if (response.dato == 'ok') {
                    location.href = "comentarios.html";
                } else {
                    alert("Datos no validos, revisa tu información");
                }
            })
            .catch(err => {
                console.log(err);
            });
    }
});

/*var nom = $("#comNombre").val().trim();
var email = $("#comCorreo").val().trim();
var tel = $("#comTelefono").val().trim();
var com = $("#comComentario").val().trim();

console.log(nom + " " + email + " " + tel + " " + com);*/