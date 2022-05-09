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
divDisponibilidad.appendChild(divFechas);
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
                            icon:'success',
                            title:'¡Conexión exitosa!',
                            confirmButtonColor:'#F27979',
                            confirmButtonText:'Ingresar'
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
    console.log($servicioSelec);
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
    console.log("cambio");
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
        console.log(date);
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
        console.log("probano:"+horaResta.toISOString());
        fecha = horaResta.toISOString().slice(0, 19).replace('T', ' ');
        //en esta parte ya se selecciono una fecha
        horaFecha.innerHTML = fecha;
        fechasinHora = fecha.slice(0,10);
        console.log(fechasinHora);
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
    let fechasOcupadas = [];
    let duracionFechasOcupadas = [];
    
    var title = document.createElement('h4');
    var divFechas2 = document.createElement('div');
    console.log('llmando chera dispon');
        console.log(divFechas.hasChildNodes());
        // if(divFechas.hasChildNodes() == true){
        //     console.log('entrandoo');
        //     // divDisponibilidad.removeChild(divFechas);
        //     divFechas.innerHTML = "";
        //     divDisponibilidad.re
        // }

    title.innerHTML = 'horas ocupadas';
    divFechas2.appendChild(title);
    $.ajax({
        url:"bd/disponibilidadAgendaBackEnd.php",
        type:"GET",
        datatype: "json",
        data:{
            cita:fechasinHora
        },
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

                            if(element.cita.includes(fechasinHora) == true){
                                console.log(element.cita);
                                console.log(element.tiempo);
                                //fechasOcupadas.push(element.cita);
                                //duracionFechasOcupadas.push(element.tiempo);
                                var divFecha = document.createElement('span');
                                divFecha.innerHTML =  element.cita+ '->' + element.tiempo+ 'h' + '<br>';
                                divFechas2.appendChild(divFecha);
                            }

                        });
                    
                }
                
                //window.location.href = 'admin.php';
            }
        }
    })
    divDisponibilidad.replaceChild(divFechas2, divFechas);
    divFechas = divFechas2;
    // for(let i = 0; i<10; i++){

    // }
}



