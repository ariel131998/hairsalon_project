<?php
session_start();  //inicia una o se retoma si ya habia alguna., en cada uno donde vaya a trabajarlo debo colocarlo

include_once 'connection.php';
$nodeConnection = new Connection();
$connection = $nodeConnection->createConnection();

$consulta = " SELECT servicio FROM `servicios` ";
$resultado = $connection->prepare($consulta);
$resultado->execute(); #ejecutamos la consulta

?>