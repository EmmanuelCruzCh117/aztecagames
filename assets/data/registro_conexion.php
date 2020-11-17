<?php
    include('conexion_global.php');

    $obj = new ConexionGlobal;

    $usuario    = $_POST['newUser'];
    $pass       = $_POST['newPassword'];
    $nombre     = $_POST['newNombre'];
    $correo     = $_POST['newEmail'];
    $direccion  = $_POST['newDireccion'];
    $telefono   = $_POST['newPhone'];

    $res = $obj->registroUsuario($usuario,$pass,$nombre,$correo,$direccion,$telefono);

    if($res == 1){
        $datosreg  = array('dato' => 'ok');
    }else{
        $datosreg  = array('dato' => 'no');
    }

    echo json_encode($datos, JSON_FORCE_OBJECT);
?>