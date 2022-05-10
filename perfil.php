<?php
session_start();  //continue working with 

$varsession = $_SESSION["s_usuario"];
if($varsession === null || $varsession  == ''){
    echo 'Usted no tiene autorizacion';
    die();
    
}
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
    <!-- Scripts calendario -->
    <!-- <script src="js/mobiscroll.javascript.min.js"></script> -->
    <script src="node_modules\jquery\dist\jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="assets/css/fontawesome.css"> -->
    <link rel="stylesheet" href="css/simplepicker.css">
    <script src="css/simplepicker.js"></script>
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
        <div class="row d-flex justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

                <div class="mb-md-5 mt-md-4 pb-5">
                <h2 class="fw-bold mb-2 text-uppercase">Reservaciones</h2>
                <p class="text-white-50 mb-5">Por favor llene los siguientes campos para agendar su cita</p>
                
                <div class="form-group form-white mb-4">
                    <select class="form-control servicioOption" id="servicio">
                        <!-- <option>Corte de cabello Hombre</option>
                        <option>Corte de cabello Dama</option>
                        <option>Coloracion de cabello</option>
                        <option>Corte de barba</option>
                        <option>Peinado Dama</option> -->
                    </select>
                </div>
                <div class="form-outline form-white mb-4 costTime" id="divDisponibilidad">
                    <h3 id ="cost"></h3>
                    <h3 id ="time"></h3>
                </div>
                    <!-- <div id="demo-inline"></div> -->
                    <div id="demo-booking-multiple"></div>
                    <label>
                        Selecciona el dia y horario: 
                        <br>
                        <button  class="calenda" id="calenda"/>Elegir Fecha </button>
                    </label>
                    <br>
                    <span class="citaHora"></span>
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
                               Pagar SECTION 
/////////////////////////////////////////////////////////////////////////////////////////////-->    
<section class="pagar-section">
    <div class="olasStyle">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,192L205.7,96L411.4,128L617.1,224L822.9,160L1028.6,160L1234.3,224L1440,224L1440,320L1234.3,320L1028.6,320L822.9,320L617.1,320L411.4,320L205.7,320L0,320Z"></path>
        </svg>
    </div>
    <div class="Pago bg-white m-3 p-3">
        <h3>Costo total de los servicios agendados</h3>
        <h2>Pago: $<?php echo $_SESSION["s_pago"]?></h2>
        <button class="btn btn-primary m-3 p-3" type="submit" id="mostraPago">Realizar Pago</button>
    </div>
    <!-- seccion para habilitar una promocion -->
    <div id="promocion">
        <button class="btn btn-secondary m-3 p-3 text-white" type="submit" id="buttonPromo">Checar promocion</button>
    </div>
</section>
<!-- ////////////////////////////////////////////////////////////////////////////////////////
                               Promociones SECTION 
/////////////////////////////////////////////////////////////////////////////////////////////-->  




<!-- ////////////////////////////////////////////////////////////////////////////////////////
                               Footer SECTION 
/////////////////////////////////////////////////////////////////////////////////////////////-->    
<footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <!-- contacto celular -->
                    <div class="col-md-4 col-lg-4 content-box pt-1 d-md-block d-lg-flex d-flex">
                        <div class="content-box__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call"  viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                <path d="M15 7a2 2 0 0 1 2 2" />
                                <path d="M15 3a6 6 0 0 1 6 6" />
                            </svg>
                        </div>
                        <div class="content-box__info">
                            <a href="https://wa.me/522211761989" class="content-box__info--title">+52 2211761989</a>
                            <p class="content-box__info--subtitle">Martes-Sabado de 9am-7pm</p>
                        </div>
                    </div>
                    <!-- contactot email -->
                    <div class="col-md-4 col-lg-4 content-box pt-1 d-md-block d-lg-flex d-flex">
                        <div class="content-box__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-opened"  viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <polyline points="3 9 12 15 21 9 12 3 3 9" />
                                <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                <line x1="3" y1="19" x2="9" y2="13" />
                                <line x1="15" y1="13" x2="21" y2="19" />
                            </svg>
                        </div>
                        <div class="content-box__info">
                            <a href="mailto:ariel.ortega.zitle98@gmail.com" class="content-box__info--title">beautySalonTYH@gmail.com</a>
                            <p class="content-box__info--subtitle">beautySalonPersonalC@gmail.com</p>
                        </div>
                    </div>
                    <!-- conttacto para localizacion -->
                    <div class="col-md-4 col-lg-4 content-box pt-1 d-md-block d-lg-flex d-flex">
                        <div class="content-box__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-2"  viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="18" y1="6" x2="18" y2="6.01" />
                                <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
                                <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
                                <line x1="9" y1="4" x2="9" y2="17" />
                                <line x1="15" y1="15" x2="15" y2="20" />
                            </svg>
                        </div>
                        <div class="content-box__info">
                            <a href="https://www.google.com/maps/place/Puebla,+Pue./@19.0399944,-98.3330513,11z/data=!3m1!4b1!4m5!3m4!1s0x85cfc0bd5ebc7a3b:0x48a6461de494ad95!8m2!3d19.0414398!4d-98.2062727" class="content-box__info--title">Puebla</a>
                            <p class="content-box__info--subtitle">México</p>
                        </div>
                    </div>
                </div>
            </div>

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
    
    
</body>
</html>