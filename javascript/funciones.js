//alerta
//validacion del formulario de registro
function validar_rg(){
   var userrg = document.getElementById("user");
   var passrg = document.getElementById("pass");
   if(userrg.value.length === 0 || passrg.value.length === 0){
      Swal.fire({
         icon: 'error',
         title: 'Oops...',
         text: 'ICEL: POR FAVOR LLENE TODOS LOS CAMPOS',
         background: 'rgb(89, 0, 255 ,0.8)',
         color: 'white',
       })
   }
}
// validacion del formulario de inicio de sesion 
function  validar_lg(){
   var userlg = document.getElementById("user-lg");
   var passlg = document.getElementById("pass-lg");
   if(userlg.value.length === 0 || passlg.value.length === 0){
      Swal.fire({
         icon: 'error',
         title: 'Oops...',
         text: 'ICEL: POR FAVOR LLENE TODOS LOS CAMPOS',
         background: 'rgb(89, 0, 255 ,0.8)',
         color: 'white',
       })
   }
}
//fin de alertas
//funcion de login-register


function register(){
 var login = document.getElementById("ir-lg");
var form_rg = document.getElementById("fr-rg");
var registrar = document.getElementById("ir-rg");
var form_lg = document.getElementById("fr-lg");

   registrar.style.opacity="0";
   registrar.style.zIndex="-1";
   login.style.opacity="1";
   login.style.zIndex="1";
   form_lg.style.zIndex="-1";
   form_lg.style.opacity="0";
   form_rg.style.opacity="1";
   form_rg.style.zIndex="1";

}
function login(){
   var login = document.getElementById("ir-lg");
  var form_rg = document.getElementById("fr-rg");
  var registrar = document.getElementById("ir-rg");
  var form_lg = document.getElementById("fr-lg");
  
     registrar.style.opacity="1";
     registrar.style.zIndex="1";
     login.style.opacity="0";
     login.style.zIndex="-1";
     form_lg.style.zIndex="1";
     form_lg.style.opacity="1";
     form_rg.style.opacity="0";
     form_rg.style.zIndex="-1";
  
  }




//termino de funcion de login y registro