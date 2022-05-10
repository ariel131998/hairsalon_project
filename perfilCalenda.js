//variables globales para mandar a guardar la cita
var servicio2; //servicio
//var usuario; //recuperar de php.
var fecha;
var fechasinHora;
var costo;
var tiempo;
//seccion obtener datos de tabla de servicios.
var servicios = document.getElementById('servicio');

var horaElegida = false;


//var divFecha = document.createElement('span');
var divDisponibilidad = document.getElementById('divDisponibilidad');
//divDisponibilidad.innerHTML = '<div id="divFechas"></div>'
var divFechas = document.createElement('div');
var divAvailable = document.createElement('div');
divDisponibilidad.appendChild(divFechas);
divDisponibilidad.appendChild(divAvailable);
//var divFechas = document.getElementById('divFechas');
//divDisponibilidad.appendChild(divFechas);

function mostrarServicios(){
    
    //modificar
    if(true){
        $.ajax({
            url:"bd/obtenerServiciosEstetica.php",
            type:"GET",
            datatype: "json",
            // data:{
            //     user:user,
            //     password: password
            // },
            success:function(data){
                //console.log(data);
                //console.log(typeof(data));
                
                //console.log(data[0]);

                // console.log(password);
                if(data.match('null')){
                    Swal.fire({
                        type:'error',
                        title:'Datos no encontrados',
                    });
                }
                else{
                    if(data!="null"){
                        Swal.fire({
                            //icon:'success',
                            title:'¡Seleccione el servicio a agendar!',
                            confirmButtonColor:'#F27979',
                            confirmButtonText:'Ok'
                            /*captura el resultado*/
                        })//se obtuvo un login exitoso
                        .then((result)=>{
                            //console.log(data);
                            const serviciosJSON = JSON.parse(data);
                            //console.log(jsonObj);
                            //console.log(typeof(jsonObj));
                            //console.log(jsonObj[0].servicio);//funciono
                            serviciosJSON.forEach(element => {
                                //console.log(element.servicio);
                                //servicios.document.write()
                                //var ventana = window.open('', 'PRINT', 'height=400,width=600');
                                const option = document.createElement('option');
                                option.text = element.servicio;
                                servicios.appendChild(option);
                            });
                            // result.forEach(element => {
                            //     servicios.innerHTML = "<option>prueba</option>";
                            //console.log(typeof(data));
                        })
                    }
                    
                }
            }
        });
    }
}
mostrarServicios();

/*
////////////////////////////////////////
Colocar tiempo y costo dependiendo de lo elegido de la BD
///////////////////////////////////////
*/
function showCost($servicioSelec){
    
    var temp  = document.getElementById('cost');
    var temp2  = document.getElementById('time');
    //cambiar por consulta en bd
    //var servicioTemp = $servicioSelec;
    //console.log($servicioSelec);
    //consulta bd por precio
    $.ajax({
        url:"bd/obtenerPrecio.php",
        data: {servicio: $servicioSelec},
        type:"POST",
        datatype: "json",
        success: function(json){
            var dataJson = JSON.parse(json);
            temp.innerHTML = "$"+dataJson[0]['costo'] ;
            temp2.innerHTML = dataJson[0]['tiempo'] + " horas";

            //pruebaEnviar
            costo = dataJson[0]['costo'];
            tiempo = dataJson[0]['tiempo'];
        },
        error : function(jqXHR, status, error) {
            alert('Disculpe, existió un problema');
        },
    });
}

const opcionCambiada = ()=>{
    //console.log("cambio");
    //console.log(servicios.value);
    var $servicioSelec = servicios.value;
    servicio2 = $servicioSelec;//pruebaEnviar
    showCost($servicioSelec);
}

servicios.addEventListener("change", opcionCambiada);


//seccion calendario
var calendario  = document.querySelector(".calenda");
var horaFecha = document.querySelector(".citaHora");
calendario.addEventListener("click", mostrarCalendario);
function mostrarCalendario(){
    const simplepicker = new SimplePicker();
    simplepicker.open()
    simplepicker.on('submit', function(date, readableDate){
        
        //console.log(typeof(date));
        //console.log(date);
        var temporal = (5 * 60) * 60000;//7
        //console.log(temporal);
        //console.log("holaa: "+date.toLocaleDate());
        //console.log(date-date.getTimezoneOffset())
        //var temp = (date-date.getTimezoneOffset()).toISOString();
        //console.log("temp"+temp);
        //console.log(date-date.getTimezoneOffset())
        //console.log("holaa: "+(date-(date.getTimezoneOffset()*60*100)).toISOString().slice(0, 19).replace('T', ' '));
        //fecha = date.toISOString().slice(0, 19).replace('T', ' ');//pruebaEnviar
        
        //console.log(fecha);
        var horaResta = new Date( date-temporal);
        //console.log("probano:"+horaResta.toISOString());
        fecha = horaResta.toISOString().slice(0, 19).replace('T', ' ');
        //en esta parte ya se selecciono una fecha
        horaFecha.innerHTML = fecha;
        fechasinHora = fecha.slice(0,10);
        //console.log(fechasinHora);
        if(divFechas.hasChildNodes == true){
            console.log('entrando elimina nodo ');
            //divDisponibilidad.removeChild(divFechas);
        }
        //aqui mostrar las fechas disponibles y de un color diferente si ya no hay espacio
        checarDisponibilidadAgenda();
        
    });
}

var botonAgendar  = document.querySelector(".reservar");
botonAgendar.addEventListener("click", agendarCita);
function agendarCita(){
    console.log("entrando agendar Cita");
    //primero verificar que se pueda en esa hora 

    //luego agregar una bandera para meter todo lo que sigue en un if.
    $.ajax({
        url:"bd/agendarCita.php",
        data: {
            servicio: servicio2,
            costo: costo,
            tiempo: tiempo,
            fecha: fecha
        },
        type:"POST",//checar en archivo php que haya lugar.
        datatype: "json",
        success: function(json){
            console.log(json);
                // console.log(password);
                if(json.match('null')){
                    Swal.fire({
                        type:'error',
                        title:'Algo salio mal, intente nuevamente',
                    });
                }
                else{
                    if(json.match('mas')){
                        //console.log('ya hay agendado ese dia');
                        Swal.fire({
                            type:'error',
                            title:'Lo sentimos, ya hay agendado ese dia',
                        });
                    }
                    else{

                        Swal.fire({
                            title: 'Su cita ha sido reservada exitosamente',
                            //showDenyButton: true,//falta modificar, dependiendo lo que regrese el php 
                            showCancelButton: true,
                            confirmButtonText: 'ok',
                            //denyButtonText: `Don't save`,
                        }).then((result)=>{
                            if (result.isConfirmed){
                                Swal.fire('Agendado','', 'success')
                                setTimeout(function(){
                                    console.log("I am the third log after 5 seconds");
                                },7000);
                                window.location.href = 'perfil.php'
                            }
                            else if(result.isDenied){
                                //ver forma de no agendar cita cuando se le de en cancelar
                                Swal.fire('Cita no agendada','','info')
                            }
                        })
                    }
                }
        },
        error : function(jqXHR, status, error) {
            alert('Disculpe, existió un problema');
        },
    });
}


function checarDisponibilidadAgenda(){
    var fechasOcupadas = [];
    var duracionFechasOcupadas = [];
    var title = document.createElement('h4');
    var titleAvailable = document.createElement('h4');
    var divFechas2 = document.createElement('div');
    var divAvailable2 = document.createElement('div');
    //console.log('llmando chera dispon');
        //console.log(divFechas.hasChildNodes());
        // if(divFechas.hasChildNodes() == true){
        //     console.log('entrandoo');
        //     // divDisponibilidad.removeChild(divFechas);
        //     divFechas.innerHTML = "";
        //     divDisponibilidad.re
        // }

    title.innerHTML = '<b class="text-danger">horas ocupadas</b>';
    divFechas2.appendChild(title);
    $.ajax({
        url:"bd/disponibilidadAgendaBackEnd.php",
        type:"GET",
        datatype: "json",
        data:{
            cita:fechasinHora
        },
        success:function(data){
            //console.log(data);
            // console.log(password);
            if(data.match('null')){
                //terminamos el while
                f=1;
            }
            else{
                if(data!="null"){
                    
                        const usuariosJson = JSON.parse(data);
                        usuariosJson.forEach(element=>{

                            if(element.cita.includes(fechasinHora) == true){
                                
                                console.log('entrandoooooooooo');
                                console.log(element.cita);
                                console.log(element.tiempo);
                                fechasOcupadas.push(element.cita);
                                duracionFechasOcupadas.push(element.tiempo);
                                var divFecha = document.createElement('span');
                                divFecha.innerHTML =  element.cita+ '->' + element.tiempo+ 'h' + '<br>';
                                divFechas2.appendChild(divFecha);
                            }

                        });

                        //moviendo aqui
                        divDisponibilidad.replaceChild(divFechas2, divFechas);
                        divFechas = divFechas2;
                        console.log(fechasOcupadas);
                        console.log(duracionFechasOcupadas);

                        //modificaciones extra
                        titleAvailable.innerHTML = '<b class="text-success">horas disponibles</b>';
                        divAvailable2.appendChild(titleAvailable);
                        //var temp = fechasOcupadas[1];
                        // console.log(fechasOcupadas.length);
                        // var dateDisponible = new Date(fecha);
                        //dateDisponible.setHours(9,0); //colocamos la hora a las 9 para iniciar a comparar
                        console.log(dateDisponible);
                        var flag = 0;
                        var duracionActual = 0;
                        for(let i = 9; i<19; i++){
                            //comparar solo horas que desde las 9 a las que estan en la bd
                            //if(dateDisponible.getHours() != fechasOcupadas[i]){
                            var dateDisponible = new Date(fecha);
                            dateDisponible.setHours(i,0);
                            dateDisponible = dateDisponible.toString().slice(15, 21);
                            //console.log(dateDisponible.getHours());
                            fechasOcupadas.forEach(element=>{
                                //console.log('element:'+element);
                                console.log('hora uno:'+element.slice(10,16) + ' hora dos:' + dateDisponible);
                                //console.log(dateDisponible.toDateString().slice(10,16));
                                var temp = element.slice(10,16);
                                if(temp.localeCompare(dateDisponible)== 0){//element.slice(10,17) == dateDisponible
                                    console.log('hora ocupada');
                                    flag = 1;
                                    duracionActual = duracionFechasOcupadas.pop();
                                    console.log('duacion de:'+ duracionActual);
                                }
                                else{
                                    
                                    //flag = 1;
                                    // var divFecha = document.createElement('span');
                                    // divFecha.innerHTML =   dateDisponible+ 'h' + '<br>';
                                    // divAvailable2.appendChild(divFecha);
                                    console.log('hora disponible');
                                }        
                            });
                            if(duracionActual >= 1){
                                flag = 1;
                                duracionActual--;
                                console.log('servicio no completado aun');
                            }
                            if(flag == 0){
                                var divFecha = document.createElement('span');
                                divFecha.innerHTML =   dateDisponible+ 'h' + ', ';
                                divAvailable2.appendChild(divFecha);
                                console.log('hora disponible');
                                divDisponibilidad.replaceChild(divAvailable2, divAvailable);
                                divAvailable = divAvailable2; 
                            }
                            flag = 0;   
                            //}
                        }
                    
                }
                
                //window.location.href = 'admin.php';
            }
        }
    });
    
}



//Funcion para realizar el pago de los servicios
var botonPago = document.getElementById('mostraPago');
botonPago.addEventListener('click',mostrarPago);
function mostrarPago(){
    $.ajax({
        url:"bd/costoTotalBackEnd.php",
        type:"POST",
        datatype: "json",
        // data:{
        //     cita:fechasinHora
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
                    Swal.fire({
                        icon:'success',
                        title:'¡Pago realizado!',
                        confirmButtonColor:'#F27979',
                        confirmButtonText:'Ok'
                        /*captura el resultado*/
                    })//s
                    setTimeout(function(){
                        console.log("I am the third log after 5 seconds");
                    },7000);
                    window.location.href = 'perfil.php'
                }
                
                //window.location.href = 'admin.php';
            }
        }
    })
}



