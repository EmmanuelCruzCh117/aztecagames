$(document).ready(function() {
    $("#btnRegistro").click(function(e) {
        e.preventDefault();

        var user = $("#newUser").val().trim();
        var pass = $("#newPassword").val().trim();
        var email = $("#newEmail").val().trim();
        var addres = $("#newDireccion").val().trim();
        var tel = $("#newPhone").val().trim();
        var name = $("#newNombre").val().trim();

        if (user === '' || pass === '' || email == '' || tel == '' || addres == '' || name == '') {
            alert("Un campo sigue vacío");
            return false;
        } else {

            console.log(user + " " + pass + " " + email + " " + addres + " " + tel + " " + name);

            registrarDato();
        }
    });

    async function registrarDato() {
        const datos = new FormData(document.getElementById('register'));

        await fetch('assets/data/registro_conexion.php', {
                method: 'POST',
                body: datos
            }).then(response => response.json())
            .then(response => {
                if (response.dato == 'ok') {
                    location.href = "login.html";
                } else {
                    alert("Datos no validos, revisa tu información");
                }
            })
            .catch(err => {
                console.log(err);
            });
    }
});