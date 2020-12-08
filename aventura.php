<?php
include 'assets/data/conexion_global.php';
include 'Configuracion.php';

$obj=new ConexionGlobal;

$res = $obj->buscarProducto();

$tem = array();
$tem = $res;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/aventura.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juegos</title>
</head>

<body>
    <header class="navbar-dark bg-dark">
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

    <div class="navbar-dark green">
        <div class="container-xl">
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                    <li class="navbar-item active">
                        <a href="juegos.php" class="nav-link">Horror</a>
                    </li>
                    <li class="navbar-item active">
                        <a href="accion.php" class="nav-link">Acción</a>
                    </li>
                    <li class="navbar-item active">
                        <a href="puzzle.php" class="nav-link">Puzzles</a>
                    </li>
                    <li class="navbar-item active">
                        <a href="aventura.php" class="nav-link">Aventura</a>
                    </li>
                    <li class="navbar-item active">
                        <a href="royal.php" class="nav-link">Battle Royal</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="container marketing">
        <?php echo '<h1 style><strong style= color:#fff;>'.$tem[15]['categoria'].'</strong></h1>';?><br>
        <hr class="featurette-divider">
        <div class="row featurette">
        <div class="col-md-7">
        <?php echo '<h2 style="color: white"; class="featurette-heading">'.$tem[15]['nombre_producto'].'</h2>';?>
        <?php echo '<strong style="color: white"; >'.$tem[15]['descripcion_producto'].'</strong>';?>
        <?php echo '<h5 style= color:#fff;>$'.$tem[15]['precio_venta'].' </h5>';?>
        <div class="text-center">
            <p><a class="btn btn-success" href="AccionCarta.php?action=addToCart&id=<?php echo $tem[15]["Id"]; ?>">Agregar a la Carta</a></p>
        </div>
        </div>
        <div class="col-md-5"><br><br><br>
        <?php echo '<img src='.$tem[15]['url_imagen'].' width="250" height="250" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx.auto">';?>
        </div>
        </div>


        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading" style="color: white"><?php echo '<strong>'.$tem[16]['nombre_producto'].'</strong>';?></h2>
        <?php echo '<strong style="color: white">'.$tem[16]['descripcion_producto'].'</strong>';?>
        <?php echo '<h5 style= color:#fff;>$'.$tem[16]['precio_venta'].' </h5>';?>
        <div class="text-center">
            <p><a class="btn btn-success" href="AccionCarta.php?action=addToCart&id=<?php echo $tem[16]["Id"]; ?>">Agregar a la Carta</a></p>
        </div>
        </div>
        <div class="col-md-5"><br><br><br>
        <?php echo '<img src='.$tem[16]['url_imagen'].' width="250" height="250" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx.auto">';?>
            </div>
        </div>


        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
            <h2 class="featurette-heading" style="color: white"><?php echo '<strong>'.$tem[17]['nombre_producto'].'</strong>';?></h2>
        <?php echo '<strong style= color:#fff;>'.$tem[17]['descripcion_producto'].'</strong>';?>
        <?php echo '<h5 style= color:#fff;>$'.$tem[17]['precio_venta'].' </h5>';?>
        <div class="text-center">
           <p><a class="btn btn-success" href="AccionCarta.php?action=addToCart&id=<?php echo $tem[17]["Id"]; ?>">Agregar a la Carta</a></p> 
        </div>
        </div>
        <div class="col-md-5"><br><br><br>
        <?php echo '<img src='.$tem[17]['url_imagen'].' width="250" height="250" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx.auto">';?>
            </div>
        </div>

        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading" style="color: white"><?php echo '<strong>'.$tem[18]['nombre_producto'].'</strong>';?></h2>
        <?php echo '<strong style="color: white">'.$tem[18]['descripcion_producto'].'</strong>';?>
        <?php echo '<h5 style= color:#fff;>$'.$tem[18]['precio_venta'].' </h5>';?>
        <div class="text-center">
        <p> <a class="btn btn-success" href="AccionCarta.php?action=addToCart&id=<?php echo $tem[18]["Id"]; ?>">Agregar a la Carta</a></p> 
        </div>
        </div>
        <div class="col-md-5"><br><br><br>
        <?php echo '<img src='.$tem[18]['url_imagen'].' width="250" height="250" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx.auto">';?>
        </div>
        </div>


        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
            <h2 class="featurette-heading" style="color: white"><?php echo '<strong>'.$tem[19]['nombre_producto'].'</strong>';?></h2>
        <?php echo '<strong style="color: white">'.$tem[19]['descripcion_producto'].'</strong>';?>
        <?php echo '<h5 style= color:#fff;>$'.$tem[19]['precio_venta'].' </h5>';?>
        <div class="text-center">           
            <p><a class="btn btn-success" href="AccionCarta.php?action=addToCart&id=<?php echo $tem[19]["Id"]; ?>">Agregar a la Carta</a></p>      
        </div>  
        </div>
        <div class="col-md-5"><br><br><br>
        <?php echo '<img src='.$tem[19]['url_imagen'].' width="250" height="250" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx.auto">';?>
        </div>
    </div>
</div>
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
</script>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</html>