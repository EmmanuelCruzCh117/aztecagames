<?php
    include('conexion_global.php');

    $obj = new ConexionGlobal;

    $usuario    = $_POST['inputUser'];
    $pass       = $_POST['inputPassword'];
    
    $res = $obj->buscarUsuario($usuario,$pass);
    if($res == 1){
        $datos  = array('dato' => 'ok');
    }else{
        $datos  = array('dato' => 'no');
    }

    echo json_encode($datos, JSON_FORCE_OBJECT);

?>