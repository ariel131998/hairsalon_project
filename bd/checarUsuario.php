<?php
// session_start();  //ver despues como se ocupa
include_once 'connection.php';
$nodeConnection = new Connection();
$connection = $nodeConnection->createConnection();

//recepción de datos enviados mediante POST desde ajax
$user = (isset($_POST['user'])) ? $_POST['user'] : ''; //isset determina que variable no sea nula
$password = (isset($_POST['password'])) ? $_POST['password'] : '';

// $pass = md5($password); //encripto la clave enviada por el usuario para compararla con la clava encriptada y almacenada en la BD
#comparamos en la base de datos con la consulta
$consulta = "SELECT * FROM usuarios_login WHERE usuario='$user' AND contrasena='$password' ";
$resultado = $connection->prepare($consulta);
$resultado->execute(); #ejecutamos la consulta

if($resultado->rowCount() >= 1){
	#FETCH_ASSOC devuelve siguiente fila como array indexado 
    $data = $resultado->fetchAll(PDO::FETCH_ASSOC); #fetchall devuelve array todas las filas del conjunto  
    $_SESSION["s_usuario"] = $user;
}else{
    $_SESSION["s_usuario"] = null;
    $data=null;
}

print json_encode($data); #enviamos el array final a ajax
$connection=null; #cerramos conexion 

?>

