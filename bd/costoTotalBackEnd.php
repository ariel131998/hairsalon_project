<?php
session_start();  //inicia una o se retoma si ya habia alguna., en cada uno donde vaya a trabajarlo debo colocarlo

include_once 'connection.php';
$nodeConnection = new Connection();
$connection = $nodeConnection->createConnection();

//recepción de datos enviados mediante POST desde ajax
$_SESSION["s_pago"] = 0; //lo mandaremos vacio ya que no se encontro ningun usuario match de session. 
$data = "success: true";
print json_encode($data); #enviamos el array final a ajax
$connection=null; #cerramos conexion 

?>