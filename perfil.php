<?php
session_start();  //continue working with 

$varsession = $_SESSION["s_usuario"];
if($varsession === null || $varsession  == ''){
    echo 'Usted no tiene autorizacion';
    die();
    
}
// function login(){
//     if($_SESSION["s_usuario"] != null){ 
//         return $_SESSION["s_usuario"];
//     } 
//     if($_SESSION["s_usuario"] == null){ return "Iniciar Sesion";} 
// }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservaciones</title>

    <link rel="shortcut icon" href="images/icono.png">
    <link rel="stylesheet" href="assets/css/style_login.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <!-- tipografia a utilizar -->
    <!-- tipografia a utilizar -->
    <!-- script -->
</head>
<body class= "gradient-custom">
    <h1>Panel de Reservaciones</h1>
    <h2>Bienvenido: <?php echo $_SESSION["s_usuario"]?></h2>
    <a href="php-login/logout.php">Cerrar sesion</a>
<!-- ////////////////////////////////////////////////////////////////////////////////////////
                               SCRIPTS SECTION 
/////////////////////////////////////////////////////////////////////////////////////////////-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">
    </script>
    <!-- <script src="db_connection.js"></script> -->
    <script src="node_modules\sweetalert2\dist\sweetalert2.all.min.js"></script>
    <script src="node_modules\jquery\dist\jquery.min.js"></script>
</body>
</html>