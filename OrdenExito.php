<?php
if(!isset($_REQUEST['id'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="assets/css/v.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Carrito Azteca</title>
    <meta charset="utf-8">
    <style>
    .container{padding: 20px;}
    p{color: #34a853;font-size: 18px;}
    </style>
</head>
</head>
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
                        <a href="login.html" class="nav-link">Login</a>
                    </li>
                    <li class="navbar-item active">
                        <a href="registro.html" class="nav-link">Registrate</a>
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
                        <a href="VerCarta.php" class="nav-link"><i class="fas fa-shopping-cart"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <br><br>
<div class="container">
<div class="card">
<div class="card-heading"> 

<ul class="nav nav-pills">
<li class="nav-item" style="border-radius: 5px;
    background-color: aquamarine;
    padding: 5px;
    text-decoration: none; margin: 10px;"><a href="index.html">Inicio</a></li>
</ul>
</div>

<div class="card-body">

    <h1>Estado de su Orden</h1>
    <p>Su pedido ha sido enviado exitosamente. La ID del pedido es #<?php echo $_GET['id']; ?></p>
           </div>
 <div class="card-footer">Carrito azteca </div>
 </div><!--Panek cierra-->
</div> <br> <br>
<footer class="footer bg-dark">
        <div class="container-xl">
            <h3>Contactanos en nuestras redes</h3>
            <a style="background-color: transparent;" href="#"> <i class="fab fa-facebook"> </i></a>
            <a style="background-color: transparent;" href="#"><i class="fab fa-twitter-square"> </i></a>
            <a style="background-color: transparent;" href="#"><i class="fab fa-whatsapp-square"> </i></a>
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