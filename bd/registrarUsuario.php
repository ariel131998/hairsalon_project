<?php
session_start();  //inicia una o se retoma si ya habia alguna., en cada uno donde vaya a trabajarlo debo colocarlo

include_once 'connection.php';

$nodeConnection = new Connection();
$connection = $nodeConnection->createConnection();

//recepción de datos enviados mediante POST desde ajax
$user = (isset($_POST['user'])) ? $_POST['user'] : ''; //isset determina que variable no sea nula
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';
$Name = (isset($_POST['Name'])) ? $_POST['Name'] : '';
$Last = (isset($_POST['Last'])) ? $_POST['Last'] : '';
$LastM = (isset($_POST['LastM'])) ? $_POST['LastM'] : '';
$Direction = (isset($_POST['Direction'])) ? $_POST['Direction'] : '';
$celphone = (isset($_POST['celphone'])) ? $_POST['celphone'] : '';
//registrar en bd
//$consulta = "SELECT * FROM usuarios_login WHERE usuario='$user' AND contrasena='$password' ";
$consulta = "INSERT INTO usuarios_login (usuario, contrasena, Nombre, Apellido, ApellidoM, direccion, correo, celular) VALUES ('$user', '$password', '$Name', '$Last', '$LastM', '$Direction', '$email', '$celphone')";
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
