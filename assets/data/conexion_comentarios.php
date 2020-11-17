<?php
    include('conexionGlob.php');

    $obj = new Conexion;

    $nombre     = $_POST['conNombre'];
    $correo     = $_POST['conCcorreo'];
    $asunto     = $_POST['conAsunto'];
    $mensaje    = $_POST['conMensaje'];

    $res = $obj->registraComentario($nombre,$correo,$asunto,$mensaje);

    if($res == 1){
        $datosreg  = array('dato' => 'ok');
    }else{
        $datosreg  = array('dato' => 'no');

    }
    echo json_encode($datosreg, JSON_FORCE_OBJECT);

?>