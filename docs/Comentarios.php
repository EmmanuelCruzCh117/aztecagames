<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/Comentarios.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel="stylesheet" type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBB40gI7Ku6shNB9vaNQ-nxEjGIVISkaz8&callback=initMap&libraries=places" defer></script>
    <link rel="stylesheet" href="assets/css/mapa.css">
    <title>Comentarios</title>
</head>

<script>
    "use strict";

    let map;
    let service;
    let infoWindow;

    function initMap() {
        const francia = new google.maps.LatLng(45.7484600, 4.8467100);

        infoWindow = new google.maps.InfoWindow;

        map = new google.maps.Map(document.getElementById('map'), {
            center: francia,
            zoom: 15
        });

        const request = {
            query: "Plaza de Bellecour",
            fields: ["name", "geometry"]
        }

        service = new google.maps.places.PlacesService(map);

        service.findPlaceFromQuery(request, (results, status) => {
            if (status === google.maps.places.PlacesServiceStatus.OK) {
                for (let i = 0; i < results.length; i++) {
                    createMarker(results[i]);
                }
                map.setCenter(results[0].geometry.location);
            }
        });
    } // end initMap

    function createMarker(place) {
        const marker = new google.maps.Marker({
            map,
            position: place.geometry.location
        });

        google.maps.event.addListener(marker, "click", () => {
            infoWindow.setContent(place.name);
            infoWindow.open(map, marker);
        });
    }
</script>

<body>
    <header class="navbar-light bg-light">
        <div class="container-xl">
            <nav class="navbar navbar-expand-lg">
                <a href="index.html" class="navbar-brand text-black mr-auto">
                    <img src="assets/img/logo1@4x.png" width="270" height="75" alt="" loading="lazy">
                </a>
                <ul class="navbar-nav">
                    <li class="navbar-item active">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="navbar-item active">
                        <a href="juegos.html" class="nav-link">Juegos</a>
                    </li>
                    <li class="navbar-item active">
                        <a href="Comentarios.html" class="nav-link">Comentarios</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>


    <section class="container">
        <div class="maps">
            <img src="assets/img/logohead@4x.png" alt="">
        </div>
        <div class="contact-form">
            <h1 class="title">Déjanos tu opinión</h1>
            <h2 class="subtitle">Nos encantaría escucharte :D</h2>
            <form action="">
                <input type="text" name="name" placeholder="Nombre" />
                <input type="email" name="e-mail" placeholder="Correo" />
                <input type="tel" name="phone" placeholder="Teléfono" />
                <textarea name="text" id="" rows="5" placeholder="Comentario"></textarea>
                <button class="btn-send">Enviar</button>
            </form>
        </div>

        <h1>Está es nuestra ubicación</h1>

    </section>
    <div id="map"></div>

    <br>
    <br>
    <footer class="footer">
        <div class="container-xl">
            <h3>Contactanos en nuestras redes</h3>
            <i class="fab fa-facebook"> </i>
            <i class="fab fa-twitter-square"> </i>
            <i class="fab fa-whatsapp-square"> </i>
            <h3>Envianos un comentario</h3>
            <a href="Comentarios.html" type="button">Enviar</a>
            <section class="container">
                <a href="index.html"><img src="assets/img/logohead@4x.png" alt="" width="100px"></a>
                <h5 class="mt-5 text-center bg-gradient-light">Copyright © 2020 AZTECAGAMES | Todos los derechos reservados
                </h5>
            </section>
        </div>
    </footer>
</body>

</html>