<?php

class ConexionGlobal{
    var $conn;
    function conectar(){
              $conn = null;
          try{

              $conn = new PDO('mysql:host=localhost;dbname=aztecagame','root','');
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              //echo 'Se estableció la conexión <br> <br>';

            }catch(PDOException $e){
                die(print_r('Error conectando a la base de datos:' . $e->getMessage()));
            } 
            return $conn;
        }
      
    function buscarUsuario($user, $pass){
            $con = $this->conectar(); //mandar llamar al metodo de conectar

            $consulta = 'SELECT nombre
                                    FROM usuario
                                    WHERE usuario=:usuario
                                    AND contrasena=:pass';

            $stmt = $con->prepare($consulta);
            $stmt->execute(array(':usuario'=>$user,':pass'=>$pass));
            $registro = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $numRegistros = count($registro);

            return $numRegistros;
        }
        
    function registroUsuario($user, $pass, $nombre, $correo, $direccion, $telefono){
            $con = $this->conectar();
             $stmt = $con->prepare('INSERT INTO usuario (usuario, contrasena, nombre, correo, direccion, telefono) VALUES (:user, :pass, :nom, :mail, :dir, :tel)');
             $rows = $stmt->execute(array(':user'=>$user,
                                             ':pass'=>$pass,
                                             ':nom'=>$nombre,
                                             ':mail'=>$correo,
                                             ':dir'=>$direccion,
                                             ':tel'=>$telefono));
             if($rows == 1){
                 echo 'Inserción correcta';
             
             }
          }
    function registraComentario($nombre, $correo, $asunto, $mensaje){
            $con = $this->conectar();
             $stmt = $con->prepare('INSERT INTO comentario (nombre, correo, asunto, mensaje) VALUES (:nom, :mail, :asu, :men)');
             $rows = $stmt->execute(array(':nom'=>$nombre,
                                             ':mail'=>$correo,
                                            ':asu'=>$asunto,
                                            ':men'=>$mensaje));
             if($rows == 1){
                 echo 'Inserción correcta';
             }
            }
        

    function buscarProducto(){
            $con = $this->conectar(); //mandar llamar al metodo de conectar

            $consulta = 'SELECT * FROM producto';

            $stmt = $con->prepare($consulta);
            $stmt->execute();
            $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);

            json_encode($registros, JSON_FORCE_OBJECT);

            return $registros;

            }
        }

?>
