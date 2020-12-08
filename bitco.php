<?php
// include database configuration file
include 'Configuracion.php';

// initializ shopping cart class
include 'La-carta.php';
$cart = new Cart;
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/pincip.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   

  <title>Bitcoin</title>
  
</head>
<body>
  <header class="navbar-light bg-light">
    <div class="container-xl">
        <nav class="navbar navbar-expand-lg">
            <a href="principal.html" class="navbar-brand text-black mr-auto">
                <img src="assets/img/logo1@4x.png" width="270" height="75" alt="" loading="lazy">
            </a>
            <ul class="navbar-nav">
                <li class="navbar-item active">
                    <a href="principal.html" class="nav-link">Home</a>
                </li>               
                <li class="navbar-item active">
                    <a href="juegos.php" class="nav-link">Juegos</a>
                </li>
                <li class="navbar-item active">
                    <a href="consolas.php" class="nav-link">Consolas</a>
                </li>
                <li class="navbar-item active">
                    <a href="Comentarios.html" class="nav-link">Comentarios</a>
                </li>
                <li class="navbar-item active">
                    <a href="index.html" class="nav-link">Log Out</a>
                </li>
                <li class="navbar-item active">
                    <a href="VerCarta.php" class="nav-link"><i class="fas fa-shopping-cart"></i></a>
                </li>
            </ul>
        </nav>
    </div>
</header>
  <br><br><br>
  
<div class="container text-center">
    <img src="assets/img/bitcoin.png" style="max-width: 350px">
    <h1>Usted está a punto de pagar: <?php echo '$'.$cart->total().'.00 MXN'?> <br> En bitcoin.</h1>
<a href="AccionCarta.php?action=placeOrder" class="btn btn-success orderBtn">Aceptar<i class="glyphicon glyphicon-menu-right"></i></a>
</div>
<br>
<br><br>
<footer class="footer bg-dark">

        <div class="container-xl">
            <h3>Contactanos en nuestras redes</h3>
            <a style="background-color: transparent;" href="#"> <i class="fab fa-facebook"> </i></a>
            <a style="background-color: transparent;" href="#"><i class="fab fa-twitter-square"> </i></a>
            <a style="background-color: transparent;" href="#"><i class="fab fa-whatsapp-square"> </i></a>
            <h3>Envianos un comentario</h3>
            <a href="Comentarios.html" type="button">Enviar</a>
            <section class="container">
                <a href="principal.html"><img src="assets/img/logohead@4x.png" alt="" width="100px"></a>
                <h5 class="mt-5 text-center bg-gradient-light">Copyright © 2020 AZTECAGAMES | Todos los derechos reservados
                </h5>
            </section>
        </div>
    </footer>
</body>
</html>