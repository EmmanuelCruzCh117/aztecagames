<?php

class ConexionGlobal{
    var $conn;
    function conectar(){
              $conn = null;
          try{

              $conn = new PDO('mysql:host=b7b8i4g9sui9ba4htvif-mysql.services.clever-cloud.com;dbname=b7b8i4g9sui9ba4htvif','uqpo5xibxpdhqces','aYFwWXmb9zijSLauAvAy');
            //   $conn = new PDO('mysql:host=localhost;dbname=aztecagame','root','');
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

             $stmt = $con->prepare('INSERT INTO usuario(id,usuario,contrasena,nombre,correo,direccion,telefono) VALUES (NULL , :user, :pass, :nom, :mail, :dir, :tel)');
             $rows = $stmt->execute(array(':user'=>$user,
                                             ':pass'=>$pass,
                                             ':nom'=>$nombre,
                                             ':mail'=>$correo,
                                             ':dir'=>$direccion,
                                             ':tel'=>$telefono));
             return $rows;                 
          }

    function registraComentario($nombre, $correo, $telefono, $comentario){                         
            $con = $this->conectar();
                                                        
             $stmt = $con->prepare('INSERT INTO comentario (fecha, 
                                                            nombre, 
                                                            correo, 
                                                            telefono, 
                                                            comentario) 
                                    VALUES (NULL ,:nom, :mail, :tel, :com)');



             $rows = $stmt->execute(array(':nom'=>$nombre,  
                                        ':mail'=>$correo,
                                        ':tel'=>$telefono,
                                        ':com'=>$comentario));

                                        

             return $rows;
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
