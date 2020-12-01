<?php
// initializ shopping cart class
include 'La-carta.php';
$cart = new Cart;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Cart - PHP Shopping Cart Tutorial</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="./assets/css/princip.css"></script>
    <style>
    .container{padding: 20px;}
    input[type="number"]{width: 20%;}
    </style>
    <script>
    function updateCartItem(obj,id){
        $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
            if(data == 'ok'){
                location.reload();
            }else{
                alert('Cart update failed, please try again.');
            }
        });
    }
    </script>
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
                        <a href="consolas.html" class="nav-link">Consolas</a>
                    </li>
                    <li class="navbar-item active">
                        <a href="Comentarios.html" class="nav-link">Comentarios</a>
                    </li>
                    <li class="navbar-item active">
                        <a href="assets/Car/VerCarta.php" class="nav-link"><i class="fas fa-shopping-cart"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
<div class="container">
<div class="panel panel-default">
<div class="panel-heading"> 

<ul class="nav nav-pills">
  <li role="presentation"><a href="index.php">Inicio</a></li>
  <li role="presentation" class="active"><a href="VerCarta.php">Ver Carta</a></li>
  <li role="presentation"><a href="Pagos.php">Pagos</a></li>
</ul>
</div>

<div class="panel-body">


    <h1>Carrito de compras</h1>
    <table class="table">
    <thead>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Sub total</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo '$'.$item["price"].' USD'; ?></td>
            <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
            <td><?php echo '$'.$item["subtotal"].' USD'; ?></td>
            <td>
                <a href="AccionCarta.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Confirma eliminar?')"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="5"><p>Tu carta esta vacia.....</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td><a href="./juegos.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Comprando</a></td>
            <td colspan="2"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo '$'.$cart->total().' USD'; ?></strong></td>
            <td><a href="Pagos.php" class="btn btn-success btn-block">Pagos <i class="glyphicon glyphicon-menu-right"></i></a></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
    
    </div>
 <div class="panel-footer">BaulPHP</div>
 </div><!--Panek cierra-->
 
</div>
</body>
</html>