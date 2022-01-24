const iniciar = document.querySelector(".ingresar");
iniciar.addEventListener("click", login);
//obtenemos los valores del formulario.
function login(){
    // checarConexion();
    user = document.getElementById("typeEmailX").value;
    password = document.getElementById("typePasswordX").value;
    if(checarVacio()){
        //mandar datos
        $.ajax({
            url:"bd/checarUsuario.php",
            type:"POST",
            datatype: "json",
            data:{
                user:user,
                password: password
            },
            success:function(data){
                console.log(data);
                // console.log(password);
                if(data == 'null'){
                    Swal.fire({
                        type:'error',
                        title:'Usuario y/o password incorrecta',
                    });
                }
                else{
                    if(data!="null"){
                        Swal.fire({
                            icon:'success',
                            title:'¡Conexión exitosa!',
                            confirmButtonColor:'#F27979',
                            confirmButtonText:'Ingresar'
                            /*captura el resultado*/
                        })
                    }
                    
                }
            }
        })
    }
}


function checarVacio(){
    let f = true;
    if(user.length =="" ||  password ==""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Dejaste un dato vacio!',
            // footer: '<a href="">Why do I have this issue?</a>'
        })
        f = false;

    }
    return f;
}