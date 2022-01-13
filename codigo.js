const iniciar = document.querySelector(".ingresar");
//let contrasena = document.querySelector("#typePasswordX");

iniciar.addEventListener("click", login);
//obtenemos los valores del formulario.
function login(){
    usuario = document.getElementById("typeEmailX").value;
    contrasena = document.getElementById("typePasswordX").value;
    //alert("hola:"+contrasena);
    // console.log(usuario);
}



