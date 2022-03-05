//seccion obtener datos de tabla de servicios.
function mostrarServicios(){
    //modificar
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
            if(data.match('null')){
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
                    })//se obtuvo un login exitoso
                    .then((result)=>{
                        window.location.href = 'perfil.php'
                    })
                }
                
            }
        }
    })
}

//seccion calendario
mobiscroll.setOptions({
    locale: mobiscroll.localeEs,
    theme: 'ios',
    themeVariant: 'light'
});

mobiscroll.datepicker('#demo-booking-multiple', {
    controls: ['calendar', 'timegrid'],
    display: 'center',
    min: '2022-02-28T00:00',
    max: '2022-08-28T00:00',
    minTime: '08:00',
    maxTime: '19:59',
    stepMinute: 60,
    // example for today's labels and invalids
    labels: [{
        start: '2022-02-27',
        textColor: '#e1528f',
        title: '3 SPOTS'
    }],
    invalid: [{
        start: '2022-02-28T08:00',
        end: '2022-02-28T13:00'
    }, {
        start: '2022-02-28T15:00',
        end: '2022-02-28T17:00'
    }, {
        start: '2022-02-28T19:00',
        end: '2022-02-28T20:00'
    }]
});


