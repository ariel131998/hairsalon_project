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
                        <a class="nav-link" href="#referencias-clientes">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Contacto</a>
                    </li>
                    <li class="nav-item ocultar">
                        <a class="nav-link" href="login.php">Entrar</a>
                    </li>
                    <li class="nav-item ocultar">
                        <a class="nav-link" href="signup.php">Registrarse</a>
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
                    <button type="button" class="rounded-pill btn-rounded" onclick="location.href='login.php';">Agendar
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
            <!-- empieza el maquetado de corte de cabello -->
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
            <!-- empieza el maquetado de coloracion-->
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
            <!-- empieza el maquetado de peinado -->
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
                        <button type="button" class="rounded-pill btn-rounded border-primary">$300
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
                               START SECTION 4 - Carrusel de imagenes  
/////////////////////////////////////////////////////////////////////////////////////////////-->
   <section id="referencias-clientes" class="carrusel-section">
       <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/carrusel/uno.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Abigail Perez</h5>
                            <p>Muy buena experiencia, super buen servicio y todo a muy buen precio.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/carrusel/dos.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Paola castillo</h5>
                        <p>Realice una coloracion y el resultado fue mejor del esperado.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/carrusel/tres.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Angelica Aguilar</h5>
                        <p>Solicite 2 cortes y una coloracion, la estilista llego a tiempo y todo super profesional</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/carrusel/cuatro.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Poli Mars</h5>
                        <p>Un peinado perfecto para mi graduacion de universidad</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/carrusel/cinco.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Yara Mano</h5>
                        <p>Un peinado perfecto para mi graduacion de universidad</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/carrusel/seis.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Yun Lara</h5>
                        <p>Esperando para mi siguiente corte, todo perfecto</p>
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
                               START SECTION 5 - Cotacto page 
/////////////////////////////////////////////////////////////////////////////////////////////-->
    <section id="education "class="education pb-5">
            <div class="container">
                <div class="row text-center">
                    <h1 class="display-3 fw-bold education--title">Contacto</h1>
                    <hr style="width: 100px; height: 3px;" class="mx-auto">
                    <p class="lead pt-1 education__name">Maria Eugenia Zitle Chavez </p>
                    <p class="lead pt-1 education__name">Carrera en Academia de Belleza</p>
                    
                </div>
            </div>
    </section>
                <!-- ////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 6 - contact places
/////////////////////////////////////////////////////////////////////////////////////////////-->
        <!-- EMPIEZA LA SECCION DE CONTACO FINAL -->
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
                            <a href="mailto:ariel.ortega.zitle98@gmail.com" class="content-box__info--title">beautySalonToYourHome@gmail.com</a>
                            <p class="content-box__info--subtitle">beautySalonPersonalCotization@gmail.com</p>
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

            <!-- Empieza los links para las redes sociales -->
            <div class="footer-sm">
                <div class="container">
                    <div class="row py-4 text-center">
                        <div class="col-lg-5 col-md-6 mb-4 text-white">
                            Contactanos a traves de nuestras redes sociales
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <a href="https://www.facebook.com/ariel.ortega.54584">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="https://twitter.com/AOZ_ariel13?t=Ae2Uo0TzyQMNOxzVok1HNw&s=09">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.instagram.com/ariel13ortega/?hl=es">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



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