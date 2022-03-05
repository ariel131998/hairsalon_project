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
    <link href="css/mobiscroll.javascript.min.css" rel="stylesheet" />
    <script src="js/mobiscroll.javascript.min.js"></script>
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
    <section class="prueba">
        <div class="container">
            <h1>Panel de Reservaciones</h1>
            <h2>Bienvenido: <?php echo $_SESSION["s_usuario"]?></h2>
            <!-- <a href="php-login/logout.php">Cerrar sesion</a> -->
        </div>
    </section>
<!-- ////////////////////////////////////////////////////////////////////////////////////////
                               Agendar SECTION 
/////////////////////////////////////////////////////////////////////////////////////////////-->    
    <section class="vh-100">
    <div class="container py-5 h-100 ">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-10 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

                <div class="mb-md-5 mt-md-4 pb-5">
                <h2 class="fw-bold mb-2 text-uppercase">Reservaciones</h2>
                <p class="text-white-50 mb-5">Por favor llene los siguientes campos para agendar su cita</p>
                
                <div class="form-group form-white mb-4">
                    <select class="form-control servicioOption" id="servicio">
                        <option>Corte de cabello Hombre</option>
                        <option>Corte de cabello Dama</option>
                        <option>Coloracion de cabello</option>
                        <option>Corte de barba</option>
                        <option>Peinado Dama</option>
                    </select>
                </div>
                <div class="form-outline form-white mb-4">
                <p class="text-white-70 mb-1">Colocar costo con javascript</p>
                <p class="text-white-70 mb-1">Colocar tiempo</p>
                </div>
                    <!-- <div id="demo-inline"></div> -->
                    <div id="demo-booking-multiple"></div>
                    <label>
                        Selecciona el dia y horario
                        <input id="demo-booking-multiple" mbsc-input data-input-style="outline" data-label-style="stacked" placeholder="Seleccione fecha..." />
                    </label>
                </div>
                <button class="btn btn-outline-light btn-lg px-5 reservar" type="submit">Reservar</button>

                <!-- <div class="d-flex justify-content-center text-center mt-4 pt-1">
                    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                    <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                </div> -->

                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
<!-- ////////////////////////////////////////////////////////////////////////////////////////
                               SCRIPTS SECTION 
/////////////////////////////////////////////////////////////////////////////////////////////-->
    <script src="perfilCalenda.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">
    </script>
    <!-- <script src="db_connection.js"></script> -->
    <script src="node_modules\sweetalert2\dist\sweetalert2.all.min.js"></script>
    <script src="node_modules\jquery\dist\jquery.min.js"></script>
</body>
</html>