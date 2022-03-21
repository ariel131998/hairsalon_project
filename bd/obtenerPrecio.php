<?php
session_start();  //inicia una o se retoma si ya habia alguna., en cada uno donde vaya a trabajarlo debo colocarlo

include_once 'connection.php';
$nodeConnection = new Connection();
$connection = $nodeConnection->createConnection();
$servicio = (isset($_POST['servicio'])) ? $_POST['servicio'] : ''; //isset determina que variable no sea nula
$consulta = " SELECT costo,tiempo FROM `servicios` WHERE servicio='$servicio'";
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