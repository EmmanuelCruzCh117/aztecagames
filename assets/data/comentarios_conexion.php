<?php
    include('conexion_registro.php');

    $obj = new Conexion;

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