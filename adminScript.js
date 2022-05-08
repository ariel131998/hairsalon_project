var accionesAdministrador = document.getElementById('accionesAdmin');
var serviceShow = document.createElement('div');
var servicio = document.getElementById('option1');
servicio.addEventListener('click', mostrarAgregarServicio);
function mostrarAgregarServicio(){
    //var serviceShow = document.createElement('div');
    //var title = document.createElement('h2');
    //title.innerHTML = 'Agrega el servicio';
    serviceShow.innerHTML = '<label for="exampleInputEmail1" class="form-label" id="nombreService">Servicio a agregar</label> <input type="text" class="form-control" id="inputService" aria-describedby="service text"> <label for="exampleInputEmail1" class="form-label" id="costService">Ingrese el costo para el servicio</label> <input type="text" class="form-control" id="inputcostService" aria-describedby="service cost"> <label for="exampleInputEmail1" class="form-label" id="timeService">Ingrese el tiempo que tendra el servicio</label> <input type="text" class="form-control" id="inputTime" aria-describedby="service time"> <button type="button" class="btn btn-primary mt-3" id="sendData">Enviar</button>';
    //serviceShow.innerHTML = '';
    accionesAdministrador.appendChild(serviceShow);
    //recuperar datos de los inputs
    var buttonSendData = document.getElementById("sendData");
    buttonSendData.addEventListener('click', registrarServicioBd);
    
    //serviceShow.innerHTML = '<label for="exampleInputEmail1" class="form-label" id="costService">Ingrese el costo que tendra el servicio</label> <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="service cost">';
}


var eliminarUsurio = document.getElementById('option2');
eliminarUsurio.addEventListener('click', mostrarEliminarUsuario);

function mostrarEliminarUsuario(){
    //console.log(serviceShow.hasChildNodes);
    if(serviceShow.hasChildNodes == true){
        accionesAdministrador.removeChild(serviceShow);
    }
    serviceShow.innerHTML = '<label for="exampleInputEmail1" class="form-label" id="eliminarUser">Ingrese el usuario a eliminar</label> <input type="text" class="form-control" id="deleteInput" aria-describedby="emailHelp"> <button type="button" class="btn btn-primary mt-3" id="sendData">Enviar</button>';
    accionesAdministrador.appendChild(serviceShow);
    //recuperar datos del input service
    var serviceDeleate = document.getElementById("deleteInput");
    //agregar a la bd
    var buttonSendData = document.getElementById("sendData");
    buttonSendData.addEventListener('click', eliminarUsuarioBd);
    
}


var eliminarUsurio = document.getElementById('option3');
eliminarUsurio.addEventListener('click', cambiarContrasena);

function cambiarContrasena(){
    if(serviceShow.hasChildNodes == true){
        accionesAdministrador.removeChild(serviceShow);
    }
    serviceShow.innerHTML = '<label for="exampleInputEmail1" class="form-label" id="cambiarContra">Ingrese la nueva contrasena</label> <input type="text" class="form-control" id="newPasswordInput" aria-describedby="emailHelp"> <button type="button" class="btn btn-primary mt-3" id="sendData">Enviar</button>';
    accionesAdministrador.appendChild(serviceShow);

    //llamar funcion
    var buttonSendData = document.getElementById("sendData");
    buttonSendData.addEventListener('click',cambiarCotraBd);
    
}

var eliminarUsurio = document.getElementById('option4');
eliminarUsurio.addEventListener('click', eliminarServicio);

function eliminarServicio(){
    if(serviceShow.hasChildNodes == true){
        accionesAdministrador.removeChild(serviceShow);
    }
    serviceShow.innerHTML = '<label for="exampleInputEmail1" class="form-label" id="eliminarServicio">Ingrese el servicio a elminar</label> <input type="text" class="form-control" id="deleteServiceInput" aria-describedby="emailHelp"> <button type="button" class="btn btn-primary mt-3" id="sendData">Enviar</button>';
    accionesAdministrador.appendChild(serviceShow);
    //llamar funcion
    var buttonSendData = document.getElementById("sendData");
    buttonSendData.addEventListener('click', eliminarServicioBd);
}



function checarVacio(serviceText, costText, timeText ){
    let f = true;
    if(serviceText.length =="" ||  serviceText =="" ||  costText =="" ||  timeText ==""){
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
function checarVacioDeleate(userDeleateText ){
    let f = true;
    if(userDeleateText.length ==""){
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

// var buttonSendData = document.getElementById("sendData");
// buttonSendData.addEventListener('click', registrarServicioBd);
function registrarServicioBd(){
    var service = document.getElementById("inputService");
    var cost = document.getElementById("inputcostService");
    var time = document.getElementById("inputTime");
    console.log(service.value);
    console.log(cost.value);
    console.log(time.value);
    var serviceText = service.value;
    var costText = cost.value;
    var timeText = time.value;
    //mandar a bd
    if(checarVacio(serviceText, costText, timeText)){
        //mandar datos
        $.ajax({
            url:"bd/adminBackEnd.php",
            type:"POST",
            datatype: "json",
            data:{
                service1:serviceText,
                cost1: costText,
                time1: timeText
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
                            confirmButtonText:'Ok'
                            /*captura el resultado*/
                        })//se obtuvo un login exitoso
                        
                            
                            //window.location.href = 'perfil.php'//checar problema de el post 
                        
                    }
                    
                    //window.location.href = 'admin.php';
                }
            }
        })
    }
}

function eliminarUsuarioBd(){
    var userDeleate = document.getElementById("deleteInput");
    var userDeleateText = userDeleate.value;
    //mandar a bd
    if(checarVacioDeleate(userDeleateText)){
        //mandar datos
        $.ajax({
            url:"bd/adminDeleteUser.php",
            type:"POST",
            datatype: "json",
            data:{
                userDeleate:userDeleateText
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
                            title:'¡Usuario eliminado correctamente!',
                            confirmButtonColor:'#F27979',
                            confirmButtonText:'Ok'
                            /*captura el resultado*/
                        })//se obtuvo un login exitoso
                        
                            
                            //window.location.href = 'perfil.php'//checar problema de el post 
                        
                    }
                    
                    //window.location.href = 'admin.php';
                }
            }
        })
    }
}

function eliminarServicioBd(){
    var userDeleate = document.getElementById("deleteServiceInput");
    var serviceDeleateText = userDeleate.value;
    //mandar a bd
    if(checarVacioDeleate(serviceDeleateText)){
        //mandar datos
        $.ajax({
            url:"bd/adminDeleteService.php",
            type:"POST",
            datatype: "json",
            data:{
                serviceDeleate:serviceDeleateText
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
                            title:'¡Servicio eliminado correctamente!',
                            confirmButtonColor:'#F27979',
                            confirmButtonText:'Ok'
                            /*captura el resultado*/
                        })//se obtuvo un login exitoso
                        
                            
                            //window.location.href = 'perfil.php'//checar problema de el post 
                        
                    }
                    
                    //window.location.href = 'admin.php';
                }
            }
        })
    }
}
function cambiarCotraBd(){
    var contra = document.getElementById("newPasswordInput");
    var contraDeleateText = contra.value;
    //mandar a bd
    if(checarVacioDeleate(contraDeleateText)){
        //mandar datos
        $.ajax({
            url:"bd/adminChangePassword.php",
            type:"POST",
            datatype: "json",
            data:{
                contraDeleateText:contraDeleateText
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
                            title:'Contrasena cambiada correctamente!',
                            confirmButtonColor:'#F27979',
                            confirmButtonText:'Ok'
                            /*captura el resultado*/
                        })//se obtuvo un login exitoso
                        
                            
                            //window.location.href = 'perfil.php'//checar problema de el post 
                        
                    }
                    
                    //window.location.href = 'admin.php';
                }
            }
        })
    }
}


function showUsersBD(){
    var f=0;
    var count = 0;
    //obtengo tabla
    var tableContent = document.getElementById('contentUserTable');
    //crear elemento a agregar a tabla, pero con un for 
    //while(f==0){
        $.ajax({
            url:"bd/getAllUsersBd.php",
            type:"GET",
            datatype: "json",
            // data:{
            //     contraDeleateText:contraDeleateText
            // },
            success:function(data){
                console.log(data);
                // console.log(password);
                if(data.match('null')){
                    //terminamos el while
                    f=1;
                }
                else{
                    if(data!="null"){
                        
                            const usuariosJson = JSON.parse(data);
                            usuariosJson.forEach(element=>{
                                const fila = document.createElement('tr');
                                //prueba
                                console.log(element.usuario);
                                fila.innerHTML = '<th scope="row">1</th><td>'+element.usuario+'</td><td>'+element.contrasena+'</td><td>'+element.Nombre+'</td>'+'</td><td>'+element.Apellido+'</td>'+'</td><td>'+element.correo+'</td>'+'</td><td>'+element.celular+'</td>';
                                tableContent.appendChild(fila);
                                //prueba
                            });
                        
                    }
                    
                    //window.location.href = 'admin.php';
                }
            }
        })
    //}
}

function showServicesBD(){

}

showUsersBD();