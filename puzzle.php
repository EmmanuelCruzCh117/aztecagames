<?php
include('assets/data/conexion_global.php');

$obj=new ConexionGlobal;

$res = $obj->buscarProducto();

$tem = array();
$tem = $res;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/puzzle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juegos</title>
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
                        <a href="juegos.html" class="nav-link">Juegos</a>
                    </li>
                    <li class="navbar-item active">
                        <a href="consolas.html" class="nav-link">Consolas</a>
                    </li>
                    <li class="navbar-item active">
                        <a href="Comentarios.html" class="nav-link">Comentarios</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="navbar-dark bg-dark">
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
        <?php echo '<h1 style= color:#fff;><strong>'.$tem[10]['categoria'].'</strong></h1>';?><br>
        <hr class="featurette-divider">
        <div class="row featurette">
        <div class="col-md-7">
        <?php echo '<h2 style= color:#fff; class="featurette-heading">'.$tem[10]['nombre_producto'].'</h2>';?>
        <?php echo '<strong style= color:#fff;>'.$tem[10]['descripcion_producto'].'</strong>';?>
        <?php echo '<h5 style= color:#fff;>$'.$tem[10]['precio_venta'].' </h5>';?>
        <p><a class="btn btn-secondary" style="background-color: #0000ff; border: none;" href="#" role="button">Comprar &raquo;</a></p>
        </div>
        <div class="col-md-5"><br><br><br>
        <?php echo '<img src='.$tem[10]['url_imagen'].' width="250" height="250" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx.auto">';?>
        </div>
        </div>


        <hr class="featurette-divider">
        <div class="row featurette">
        <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">
        <?php echo '<strong style= color:#fff;>'.$tem[11]['nombre_producto'].'</strong>';?></h2>
        <?php echo '<strong style= color:#fff;>'.$tem[11]['descripcion_producto'].'</strong>';?>
        <?php echo '<h5 style= color:#fff;>$'.$tem[11]['precio_venta'].' </h5>';?>
        <p><a class="btn btn-secondary" style="background-color: #0000ff; border: none;" href="#" role="button">Comprar &raquo;</a></p>
        </div>
        <div class="col-md-5"><br><br><br>
        <?php echo '<img src='.$tem[11]['url_imagen'].' width="250" height="250" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx.auto">';?>
            </div>
        </div>


        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
            <h2 class="featurette-heading"><?php echo '<strong style= color:#fff;>'.$tem[12]['nombre_producto'].'</strong>';?></h2>
        <?php echo '<strong style= color:#fff;>'.$tem[12]['descripcion_producto'].'</strong>';?>
        <?php echo '<h5 style= color:#fff;>$'.$tem[12]['precio_venta'].' </h5>';?>
        <p><a class="btn btn-secondary" style="background-color: #0000ff; border: none;" href="#" role="button">Comprar &raquo;</a></p>
        </div>
        <div class="col-md-5"><br><br><br>
        <?php echo '<img src='.$tem[12]['url_imagen'].' width="250" height="250" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx.auto">';?>
            </div>
        </div>

        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading"><?php echo '<strong style= color:#fff;>'.$tem[13]['nombre_producto'].'</strong>';?></h2>
        <?php echo '<strong style= color:#fff;>'.$tem[13]['descripcion_producto'].'</strong>';?>
        <?php echo '<h5 style= color:#fff;>$'.$tem[13]['precio_venta'].' </h5>';?>
        <p><a class="btn btn-secondary" style="background-color: #0000ff; border: none;" href="#" role="button">Comprar &raquo;</a></p>
        </div>
        <div class="col-md-5"><br><br><br>
        <?php echo '<img src='.$tem[13]['url_imagen'].' width="250" height="250" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx.auto">';?>
        </div>
        </div>


        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
            <h2 class="featurette-heading"><?php echo '<strong style= color:#fff;>'.$tem[14]['nombre_producto'].'</strong>';?></h2>
        <?php echo '<strong style= color:#fff;>'.$tem[14]['descripcion_producto'].'</strong>';?>
        <?php echo '<h5 style= color:#fff;>$'.$tem[14]['precio_venta'].' </h5>';?>
        <p><a class="btn btn-secondary" style="background-color: #0000ff; border: none;" href="#" role="button">Comprar &raquo;</a></p>
        </div>
        <div class="col-md-5"><br><br><br>
        <?php echo '<img src='.$tem[14]['url_imagen'].' width="250" height="250" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx.auto">';?>
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
                <a href="index.html"><img src="assets/img/logohead@4x.png" alt="" width="100px"></a>
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