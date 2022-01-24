
<?php
#se utilizo PDO
 class Connection{
     public static function createConnection(){
        /*para migrar a otra base de datos, solo es necesario cambiar el nomnre de la bd y host*/
         define('servidor','localhost:3307'); #servidor se va a llamar localhost 
         define('nombre_bd','hairsalon');
         define('usuario','ariel');
         define('password','201719454');         
         $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'); 
         
         try{
            $conexion = new PDO("mysql:host=".servidor.";dbname=".nombre_bd, usuario, password, $opciones);             
            return $conexion; 
         }catch (Exception $e){
             die("El error de Conexión es :".$e->getMessage());
         }         
     }
     
 }
?>