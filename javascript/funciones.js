//alerta

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