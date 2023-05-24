//funcion de login-register
document.getElementById("btn-register").addEventListener("click",register);
var login2 = document.getElementById("ir-lg");
var form_rg = document.getElementById("fr-rg");
var registrar = document.getElementById("ir-rg");
var form_lg = document.getElementById("fr-lg");
function register(){
     registrar.style.opacity="0";
     registrar.style.zIndex="-1";
     login2.style.opacity="1";
     login2.style.zIndex="1";
     form_lg.style.zIndex="-1";
     form_lg.style.opacity="0";
     form_rg.style.opacity="1";
     form_rg.style.zIndex="1";
  
  }

document.getElementById("btn-login").addEventListener("click",login);
var login1 = document.getElementById("ir-lg");
var form_rg = document.getElementById("fr-rg");
var registrar = document.getElementById("ir-rg");
var form_lg = document.getElementById("fr-lg");

function login(){
       registrar.style.opacity="1";
       registrar.style.zIndex="1";
       login1.style.opacity="0";
       login1.style.zIndex="-1";
       form_lg.style.zIndex="1";
       form_lg.style.opacity="1";
       form_rg.style.opacity="0";
       form_rg.style.zIndex="-1";
    }
  //termino de funcion de login y registro