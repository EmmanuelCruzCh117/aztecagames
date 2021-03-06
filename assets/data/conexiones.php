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
        }
    /*
        registroUsuario($user, $pass, $nombre, $correo){
            $con = $this->conectar();
             $stmt = $con->prepare('INSERT INTO usuario (usuario, contrasena, nombre, correo, direccion, telefono) VALUES (:user, :pass, :nom, :mail)');
             $rows = $stmt->execute(array(':user'=>$user,
                                             ':pass'=>$pass,
                                             ':nom'=>$nombre,
                                             ':mail'=>$correo));
             if($rows == 1){
                 echo 'Inserción correcta';
             
             }
    }
  */
