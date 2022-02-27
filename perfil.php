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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <!-- <link rel="stylesheet" href="assets/css/fontawesome.css"> -->
    <!-- tipografia a utilizar -->
    <!-- tipografia a utilizar -->
    <!-- script -->
</head>
<body class= "gradient-custom">
        <!-- ////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 1 - THE NAVBAR SECTION  
/////////////////////////////////////////////////////////////////////////////////////////////-->
<nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/icono-navbar.png" width="60" alt="logo image">
                <span class="logo-letras">Beauty Salon</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Contacto</a>
                    </li>
                    <li class="nav-item ocultar">
                        <a class="nav-link" href="php-login/logout.php">Cerrar Sesion</a>
                    </li>
                </ul>
                <button type="button" class="rounded-pill btn-rounded" onclick="location.href='https://wa.me/522228231832';">+52 2211761989
                    <span>
                        <i class="fas fa-phone-alt"></i>
                    </span>
                </button>
                <!-- Example single danger button -->
                <!-- Menu para iniciar sesion -->
                <div class="btn-group">
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fas fa-user" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="php-login/logout.php">Cerrar Sesion</a></li>
                        </ul>
                        </li>
                    </ul>
                    </div>
            </div>
        </div>
    </nav>
    <section class="intro-section">
        <div class="container">
            <h1>Panel de Reservaciones</h1>
            <h2>Bienvenido: <?php echo $_SESSION["s_usuario"]?></h2>
            <a href="php-login/logout.php">Cerrar sesion</a>
        </div>
    </section>
    
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