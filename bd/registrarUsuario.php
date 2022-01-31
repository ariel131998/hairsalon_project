<?php
session_start();  //inicia una o se retoma si ya habia alguna., en cada uno donde vaya a trabajarlo debo colocarlo

include_once 'connection.php';

$nodeConnection = new Connection();
$connection = $nodeConnection->createConnection();

//recepción de datos enviados mediante POST desde ajax
$user = (isset($_POST['user'])) ? $_POST['user'] : ''; //isset determina que variable no sea nula
$password = (isset($_POST['password'])) ? $_POST['password'] : '';
$metodo = 'texto';
//registrar en bd
//$consulta = "SELECT * FROM usuarios_login WHERE usuario='$user' AND contrasena='$password' ";
$consulta = "INSERT INTO usuarios_login (usuario, contrasena,metodo) VALUES ('$user', '$password', '$metodo')";
$resultado = $connection->prepare($consulta);
$resultado->execute(); #ejecutamos la consulta
// write_to_console($resultado);
if($resultado->rowCount() >= 1){
	#FETCH_ASSOC devuelve siguiente fila como array indexado 
    $data = $resultado->fetchAll(PDO::FETCH_ASSOC); #fetchall devuelve array todas las filas del conjunto  
    $_SESSION["s_usuario"] = $user;
}else{
    $data=null;
}
print json_encode($data); #enviamos el array final a ajax
$connection=null; #cerramos conexion 


function write_to_console($data) {
    $console = $data;
    if (is_array($console))
    $console = implode(',', $console);   
    echo "<script>console.log('Console: " . $console . "' );</script>";
}
?>
