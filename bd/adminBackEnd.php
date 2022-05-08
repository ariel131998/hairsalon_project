<?php
session_start();  //inicia una o se retoma si ya habia alguna., en cada uno donde vaya a trabajarlo debo colocarlo

include_once 'connection.php';
$nodeConnection = new Connection();
$connection = $nodeConnection->createConnection();

$service = (isset($_POST['service1'])) ? $_POST['service1'] : ''; //isset determina que variable no sea nula
$cost = (isset($_POST['cost1'])) ? $_POST['cost1'] : '';
$time = (isset($_POST['time1'])) ? $_POST['time1'] : '';

$consulta = " INSERT INTO servicios (`servicio`, `costo`, `tiempo`) VALUES ('$service', '$cost', '$time')";
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