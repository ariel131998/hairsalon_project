var accionesAdministrador = document.getElementById('accionesAdmin');
var serviceShow = document.createElement('div');
var servicio = document.getElementById('option1');
servicio.addEventListener('click', mostrarAgregarServicio);
function mostrarAgregarServicio(){
    //var serviceShow = document.createElement('div');
    //var title = document.createElement('h2');
    //title.innerHTML = 'Agrega el servicio';
    serviceShow.innerHTML = '<label for="exampleInputEmail1" class="form-label" id="agregarService">Servicio a agregar</label> <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">';
    //serviceShow.innerHTML = '';
    accionesAdministrador.appendChild(serviceShow);
    //var divTextBox = document.createElement('div');
    //divTextBox.innerHTML = ''
    //serviceShow.appendChild(title);
    //document.body.appendChild(serviceShow);
}


var eliminarUsurio = document.getElementById('option2');
eliminarUsurio.addEventListener('click', mostrarEliminarUsuario);

function mostrarEliminarUsuario(){
    accionesAdministrador.removeChild(serviceShow);
    serviceShow.innerHTML = '<label for="exampleInputEmail1" class="form-label" id="eliminarUser">Ingrese el usuario a eliminar</label> <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">';
    accionesAdministrador.appendChild(serviceShow);
}


var eliminarUsurio = document.getElementById('option3');
eliminarUsurio.addEventListener('click', cambiarContrasena);

function cambiarContrasena(){
    accionesAdministrador.removeChild(serviceShow);
    serviceShow.innerHTML = '<label for="exampleInputEmail1" class="form-label" id="cambiarContra">Ingrese la nueva contrasena</label> <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">';
    accionesAdministrador.appendChild(serviceShow);
}


var eliminarUsurio = document.getElementById('option4');
eliminarUsurio.addEventListener('click', eliminarServicio);

function eliminarServicio(){
    accionesAdministrador.removeChild(serviceShow);
    serviceShow.innerHTML = '<label for="exampleInputEmail1" class="form-label" id="eliminarServicio">Ingrese el servicio a elminar</label> <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">';
    accionesAdministrador.appendChild(serviceShow);
}