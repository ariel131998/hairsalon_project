<?php
session_start();  //inicia una o se retoma si ya habia alguna., en cada uno donde vaya a trabajarlo debo colocarlo

include_once 'connection.php';
$nodeConnection = new Connection();
$connection = $nodeConnection->createConnection();

$contraDeleateText = (isset($_POST['contraDeleateText'])) ? $_POST['contraDeleateText'] : ''; //isset determina que variable no sea nula

$consulta = "UPDATE usuarios_login SET contrasena = '$contraDeleateText' where usuario = 'admin'";
$resultado = $connection->prepare($consulta);
$resultado->execute(); #ejecutamos la consulta

if($resultado->rowCount() >= 1){
	#FETCH_ASSOC devuelve siguiente fila como array indexado 
    $data = $resultado->fetchAll(PDO::FETCH_ASSOC); #fetchall devuelve array todas las filas del conjunto  
}else{
    $data=null;
}

print json_encode($data); #enviamos el array final a ajax
$conexion=null; #cerramos conexion 
?>