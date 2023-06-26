
//funcion para pregunta si estas seguro de eliminar el usuario
function eliminar(codigo){
  Swal.fire({
    title: '¿ESTAS SEGURO DE ELIMINAR ESTE USUARIO?',
    //aqui le muestro el id del usuario que se va eliminar
    text: 'ID DE USUARIO ='+codigo,
    icon: 'warning',
    showCancelButton: true,
    background:  'rgb(89, 0, 255,0.8)',
    color: 'white',
    cancelButtonText: 'CANCELAR',
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'ELIMINAR  USUARIO'
  }).then((result) => {  //aqui le pregunto si es que se llego a precionar el boton de eliminar
    if (result.isConfirmed) {
      Swal.fire(
        //aqui le digo que la alerta se va ejecutar dependiendo de la funcion confirmar
        confirmar(codigo)
      )
    }
  })
  function confirmar(){
    //aqui pido el valor del id
    parametros = {id: codigo};
    //aqui abro la libreria ajax para ejecutar la eliminacion de datos con php
    $.ajax({
      data: parametros,
      url: "php/eliminar.php",
      //seran enviado por  tipo post
      type:"POST",
      //AQUI ABRIMOS FUNCIONES PARA QUE NOS ENVIE UN MENSAJE SI SE ELIMINARON 
      //CORRECTAMENTE
      beforeSend: function(){},
      success: function(){
        Swal.fire({
          title: 'USUARIO ELIMINADO CORRECTAMENTE',
          icon: 'success',
          background:  'rgb(89, 0, 255,0.8)',
          color: 'white',
          confirmButtonText: 'CONTINUAR'
        }).then((result) =>{
          //EN CASO DE QUE SE ELIMINARO CORRECTAMENTE SE VA RECARGAR LA PAGINA PARA 
          //QUE LOS CAMBIO SE MUESTREN AL MOMENTO  
          location.reload();
        });
      },
    });
  }
}

