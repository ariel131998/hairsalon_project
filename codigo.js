const iniciar = document.querySelector(".ingresar");
//console.log("iniciar");
//let contrasena = document.querySelector("#typePasswordX");
//console.log("hola");
iniciar.addEventListener("click", login);
//obtenemos los valores del formulario.
function login(){
    console.log("hola");
    checarConexion();
    usuario = document.getElementById("typeEmailX").value;
    contrasena = document.getElementById("typePasswordX").value;
    
    console.log(checarConexion());
    //alert("hola:"+contrasena);
    // console.log(usuario);
}

function checarConexion(){
    //primero establecer conexion con la base de datos.
    const connection = requiere('/db_connection');
    connection.connect();
    console.log(connection);
    
}


