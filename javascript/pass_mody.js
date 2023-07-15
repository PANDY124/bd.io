function pass_modificar(idcodigo){ //aqui se hace la funcion pasando como
  //parametro el id selecionado y que se active una alerta
    Swal.fire({
        title: 'CAMBIAR CONTRASEÑA DE USUARIO',
        html:
          '<input type="text" id="pass" class="p1" placeholder="ingresa contraseña">' +
          '<input type="password" id="newpass" class="p1" placeholder="nueva contraseña">',
        showCancelButton: true,
        confirmButtonText: 'Enviar',
        cancelButtonText: 'Cancelar',
        preConfirm: () => { //aqui se hace una accion si se presiona el boton de acceptar
          // Obtener los valores de los campos del formulario
          const pass = Swal.getPopup().querySelector('#pass').value;
          const newpass = Swal.getPopup().querySelector('#newpass').value;
        if(pass && newpass){//este if funciona para verificar que los campos input no esten vacios
           // Hacer la solicitud AJAX para enviar los datos a PHP
           $.ajax({
              url: 'php/modificarpass.php',
              method: 'POST',
              data: {
                pass: pass,
                newpass: newpass,
                codigo:idcodigo
              },
              success:function(cambio){  //aqui se hace la funccion si los datos se enviaron correctamente
                //dentro de la funcion se crea la variable que nos traera los resultados
                //obtenidos del json de php
                var result = JSON.parse(cambio);
                //aqui preguntamos que si el resultado es true que envie el siguiente alerta
                if(result.success == "true"){
                  console.log(cambio);
                Swal.fire({
                  title: result.mensaje
                })
              }else{//y si no que me envie esta otra alerta
                console.log(cambio);
                Swal.fire({
                  title: result.mensaje
                })
              }
}
            });
          }else{//si estan vacion en el primer alerta me mandara un mensaje de validacion
            Swal.showValidationMessage('<span class="validacion">LLENE TODOS LOS CAMPOS</span>');
            //aqui le estamos assignado una clase para poderla utilizar en css
            Swal.getValidationMessage().classList.add('validacion');
         
          }
        },
        //y aqui volvemo a declara la clase para el sweet alert
        customClass: {
          validationMessage: 'validacion'
        }
        
        })
  

          }
         
              
      
