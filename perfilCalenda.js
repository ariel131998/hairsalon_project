//seccion obtener datos de tabla de servicios.
var servicios = document.getElementById('servicio');

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
    showCost($servicioSelec);
    showTime();
}

servicios.addEventListener("change", opcionCambiada);







//seccion calendario
// mobiscroll.setOptions({
//     locale: mobiscroll.localeEs,
//     theme: 'ios',
//     themeVariant: 'light'
// });

// mobiscroll.datepicker('#demo-booking-multiple', {
//     controls: ['calendar', 'timegrid'],
//     display: 'center',
//     min: '2022-02-28T00:00',
//     max: '2022-08-28T00:00',
//     minTime: '08:00',
//     maxTime: '19:59',
//     stepMinute: 60,
//     // example for today's labels and invalids
//     labels: [{
//         start: '2022-02-27',
//         textColor: '#e1528f',
//         title: '3 SPOTS'
//     }],
//     invalid: [{
//         start: '2022-02-28T08:00',
//         end: '2022-02-28T13:00'
//     }, {
//         start: '2022-02-28T15:00',
//         end: '2022-02-28T17:00'
//     }, {
//         start: '2022-02-28T19:00',
//         end: '2022-02-28T20:00'
//     }]
// });


