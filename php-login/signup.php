    <!-- ////////////////////////////////////////////////////////////////////////////////////////
                               HTML SECTION 
/////////////////////////////////////////////////////////////////////////////////////////////-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Usuarios</title>

    <link rel="shortcut icon" href="../images/icono.png">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <!-- tipografia a utilizar -->
    
</head>
<body class="menu">
    <!-- closs menu -->
    <!-- <h1>Por favor inicia sesion</h1> 

    <a href="php-login/login.php">Inicio de sesion</a> or
    <a href="php-login/signup.php">Registrarse</a> -->


    <section class="vh-100">
    <div class="container py-5 h-100 ">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-10 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

                <div class="mb-md-5 mt-md-4 pb-5">

                <h2 class="fw-bold mb-2 text-uppercase">Registrarse</h2>
                <p class="text-white-50 mb-5">Por favor ingresa tu email y contraseña</p>

                <div class="form-outline form-white mb-4">
                    <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                    <label class="form-label" for="typeEmailX">Email</label>
                </div>

                <div class="form-outline form-white mb-4">
                    <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                    <label class="form-label" for="typePasswordX">Contraseña</label>
                </div>
                <button class="btn btn-outline-light btn-lg px-5 registrar" type="submit">Registrarse</button>

                <!-- <div class="d-flex justify-content-center text-center mt-4 pt-1">
                    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                    <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                </div> -->

                </div>

                <div>
                <a href="javascript:history.back(-1);" class="text-white-50 fw-bold">Regresar</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">
    </script>
    <script src="signupCodigo.js"></script>
    <script src="../node_modules\sweetalert2\dist\sweetalert2.all.min.js"></script>
    <script src="../node_modules\jquery\dist\jquery.min.js"></script>
</body>
</html>