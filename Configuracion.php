<?php
//DB details
$dbHost = 'localhost';
$dbUsername = 'id15523793_user1';
$dbPassword = 'b9]|\5*[>~\]U_\E';
$dbName = 'id15523793_aztecagame';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("No hay Conexion con la base de datos: " . $db->connect_error);
} 
?>