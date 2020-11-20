<?php
    include('conexion_global.php');

    $obj = new ConexionGlobal;

    $nombre     = $_POST['comNombre'];
    $correo     = $_POST['comCorreo'];
    $telefono     = $_POST['comTelefono'];
    $comentario    = $_POST['comComentario'];

    $res = $obj->registraComentario($nombre,$correo,$telefono,$comentario);

    if($res == 1){
        $datos  = array('dato' => 'ok');
    }else{
        $datos  = array('dato' => 'no');
    }

    
    echo json_encode($datos, JSON_FORCE_OBJECT);
?>