<?php
session_start();  //continue working with 
// include_once('checarUsuario.php');
// $varsession = $_SESSION["s_usuario"];
// if($varsession === null || $varsession  == ''){
//     $temp = 'Iniciar Sesion';
    
// }
// function login(){
//     if($_SESSION["s_usuario"] != null){ 
//         return $_SESSION["s_usuario"];
//     } 
//     if($_SESSION["s_usuario"] == null){ return "Iniciar Sesion";} 
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peluqueria express</title>
    <!-- exportamos achivo de estilos -->
    <link rel="shortcut icon" href="images/icono.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <!-- boton intro video -->
    <link rel="stylesheet" href="assets/vendors/css/glightbox.min.css">
    <!-- tipografia a utilizar -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
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
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contratar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                </ul>
                <button type="button" class="rounded-pill btn-rounded">+52 2211761989
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
                            <li><a class="dropdown-item" href="login.php">Entrar</a></li>
                            <li><a class="dropdown-item" href="signup.php">Registrarse</a></li>
                            <li><a class="dropdown-item" href="#">Pendiente</a></li>
                        </ul>
                        </li>
                    </ul>
                    </div>
            </div>
        </div>
    </nav>
        <!-- ////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 2 - PRESENTATION PAGE  
/////////////////////////////////////////////////////////////////////////////////////////////-->
    
    <section id="home" class="intro-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- inicia el contenido de la introduccion -->
                <div class="col-md-6 intros">
                    <h1 class="display-2">
                        <span class="display-2--intro">
                            Servicios de Belleza
                        </span>
                        <span class="display-2--description lh-base">
                            Somos una compania dedicada a darte los mejores servicios de belleza, todo esto
                            hasta la comodidad de tu hogar. 5 anos en el mercado nos respaldan. Agenda tu cita o conoce 
                            nuestros servicios
                        </span>
                    </h1>
                    <button type="button" class="rounded-pill btn-rounded">Agendar
                        <span>
                            <i class="fas fa-arrow-right"></i>
                        </span>
                    </button>
                </div>
                <!-- inicia el contenido para lanzar el video-->
                <div class="col-md-6 intros text-end">
                    <div class="video-box">
                        <img src="images/presentation/dos.png" alt="video ilustration" class="img-fluid">
                        <a href="#" class="glightbox">
                            <!-- posicionar icono al medio si quisieramos usar las propiedades de bootstrap -->
                            <!-- <a href="https://youtu.be/XixO5zibE_s" class="position-absolute top-50 start-50 translate-middle"> -->
                            <span>
                                <i class="fas fa-play-circle"></i>
                            </span>
                            <span class="border-animation border-animation--border-1 "></span>
                            <span class="border-animation border-animation--border-2"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#273036" fill-opacity="1" d="M0,256L288,288L576,224L864,192L1152,288L1440,32L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path>
        </svg>
    </section>
    <!-- ////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 3 - Servicios de la empresa  
/////////////////////////////////////////////////////////////////////////////////////////////-->
    <section id="services" class="our-services services>
        <div class=" container">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,128L480,160L960,192L1440,128L1440,0L960,0L480,0L0,0Z"></path></svg>
        <div class="row text-center">
            <h1 class="display-3 fw-bold">Servicios a domicilio</h1>
            <div class="heading-line mb-1"></div>
        </div>
        <!-- </div> -->
        <!-- DESCRIPCION DE LOS SERVICIOS -->
        <!-- <div class="container"> -->
        <div class="row pt-2 pb-2 mt-0 mb-3">
            <div class="col-md-6 border-right">
                <div class="p-3">
                    <ul class="fw-bold text-capitalize text-center list-group">
                        <li class="list-group-item">Corte de cabello</li>
                        <li class="list-group-item">Coloracion de cabello</li>
                        <li class="list-group-item">Peinado</li>
                        <li class="list-group-item">Colocacion de unas</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 text-start">
                    <p class="fw-light">
                        Cualquiera de los servicios mencionados se le realiza hasta la comodidad de su hogar, sin cargo adicional,
                        de igual forma si hay varias personas que quieran diferentes servicios en el mismo domicilio se les realiza un descuento adicional.
                        
                    </p>
                </div>
            </div>
        </div>
        </div>
        <!-- EMPIEZAN EL CONTENIDO DE LAS HABILIDADES -->
        <div class="container">
            <!-- empieza el maquetado de desarrollo web -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
                    <div class="services__content">
                        <div class="icon d-block fas fa-cut"></div>
                        <h3 class="display-3--title mt-1">Corte de cabello</h3>
                        <p class="lh-lg">
                            El corte de cabello incluye el servicio a domicilio, su corte de cabello el cual sin importar 
                            el genero se realizara el mismo precio. Puede mandar al realizar la reservacion una imagen de 
                            referencia de lo que le gustaria realizarse. 
                        </p>
                        <button type="button" class="rounded-pill btn-rounded border-primary">$200
                            <span>
                                <i class="fas fa-dollar-sign"></i>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
                    <div class="services__pic">
                        <img src="images/services/cuatro.png" alt="web ilustration" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- empieza el maquetado de desarrollo de aplicaciones moviles-->
            <div class="row">
                <div
                    class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start order-2 order-sm-2 order-xs-2">
                    <div class="services__pic">
                        <img src="images/services/cinco.svg" alt="web ilustration" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 order-1 order-sm-1 order-xs-1">
                    <div class="services__content">
                        <div class="icon d-block fas fa-user"></div>
                        <h3 class="display-3--title mt-1">Coloracion de cabello</h3>
                        <p class="lh-lg">
                            Para la coloracion de cabello se incluye un servicio de decoloracion, este puede depender de el color elegido, 
                            ya que para tonos mas fuertes sera necesario un mayor tiempo y un mayor producto. Es por ello que la cotizacion
                            puede variar, pero el precio aproximado es el que se visualiza abajo.
                        </p>
                        <button type="button" class="rounded-pill btn-rounded border-primary">$250
                            <span>
                                <i class="fas fa-dollar-sign"></i>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- empieza el maquetado de ciencia de datos -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
                    <div class="services__content">
                        <div class="icon d-block fa-duotone fa-user-hair-long"></div>
                        <h3 class="display-3--title mt-1">Peinado</h3>
                        <p class="lh-lg">
                            En el servicio de peinado brindamos el servicio a domicilio, si se requiriera cortar el cabello para el peinado,
                            este igual ya iria incluido, posteriormente se puede elegir entre un catalogo o el cliente puede decidir cual 
                            es el que le gustaria.
                        </p>
                        <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
                            <span>
                                <i class="fas fa-dollar-sign"></i>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
                    <div class="services__pic">
                        <img src="images/services/dos.png" alt="web ilustration" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>



            <!-- ////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 5 - Carrusel de imagenes  
/////////////////////////////////////////////////////////////////////////////////////////////-->
   <section id="referencias-clientes" class="carrusel-section">
       <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="images/carrusel/uno.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="images/carrusel/dos.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="images/carrusel/tres.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
       </div>
   </section>





        <!-- ////////////////////////////////////////////////////////////////////////////////////////
                               END SECTION  - SCRIPT SECTION  
/////////////////////////////////////////////////////////////////////////////////////////////-->
    <!-- script video intro -->
    <script src="assets/vendors/js/glightbox.min.js"></script>

    <script type="text/javascript">
        const lightbox = GLightbox({
            'href': 'https://www.youtube.com/watch?v=c0JzlF0eRJs',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
        });
    </script>
    <!-- scrip bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">
    </script>
</body>
</html>