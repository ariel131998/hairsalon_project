const registrar = document.querySelector(".registrar");
registrar.addEventListener("click", createUser);

function createUser(){
    user = document.getElementById("typeEmailX").value;
    password = document.getElementById("typePasswordX").value;

    if(checarVacio()){
        //mandar datos
        $.ajax({
            url:"bd/registrarUsuario.php",
            type:"POST",
            datatype: "json",
            data:{
                user:user,
                password: password
            },
            success:function(data){
                console.log(data);
                // console.log(password);
                if(data.match('null')){
                    Swal.fire({
                        type:'error',
                        title:'Algo salio mal, intente nuevamente',
                    });
                }
                else{
                    if(data!="null"){
                        Swal.fire({
                            icon:'success',
                            title:'¡Registro exitoso!',
                            confirmButtonColor:'#F27979',
                            confirmButtonText:'Ingresar'
                            /*captura el resultado*/
                        })//se obtuvo un login exitoso
                        
                            
                            //window.location.href = 'perfil.php'//checar problema de el post 
                        
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