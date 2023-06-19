//esto lo utilizamos para poder volver a llamar a la funcion
$(buscar_datos());


//pasamos los valores al archivo php para que haga la consulta
function buscar_datos(consulta){
    $.ajax({
        url: 'php/consultusers.php',
        type:'POST',
        dataType: 'html',
        data: {consulta:consulta},
    })
    //esta parte ejecutara si es que se lleva con exito la consulta
    .done(function(respuesta){
        $("#datos").html(respuesta);

    })
    //este es el caso contrario si es que no se puede hacer la consulta
    .fail(function(){
      console.log("error");

    })

}
//aqui creamos la funcion para que ejecute una consulta dependiendo el dato ingresado el caja de texto
$(document).on('keyup', '#buscar', function(){
//declaramos variable  de la caja de texto para que valor tiene
    var busqueda= $(this).val();
   //aqui prenguntamos si la caja de texto no esta vacia que se haga la consulta
    if(busqueda != "" ){
        buscar_datos(busqueda);
//en caso contrario si la caja de texto esta vacia que me muestre todos los datos
    }else{
        buscar_datos();
    }
});