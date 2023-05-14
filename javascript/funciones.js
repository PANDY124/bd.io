//alerta
function valida_envia(){
    //valido el nombre
    if (document.registrar.usuario.value.length == 0 || document.registrar.pass.value.length == 0) {
        Swal.fire({
            
            html: '<div class="titulo">ICEL ERMITA DICE:</div>'+
            '<div class="al-1">LLENA TODOS LOS CAMPOS</div>',
            icon: 'error',
            background: 'rgb(0,148,231,0.8)',
            position: 'top-end',
            toast: true,
            timer:'5000',
            timerProgressBar:true,
            showConfirmButton: false
        } ,
        );
    }
}
//fin de alertas
//funcion de login-register

document.getElementById("btn-4").addEventListener("click",login_register);

function login_register(){

    if(window.innerWidth > 777){
        if(document.getElementById("lg-2").style.left=="0px"){
        document.getElementById("lg-2").style.left="350px";
        document.getElementById("ti-lg").style.color="white";
        document.getElementById("ti-rg").style.color="transparent";
        document.getElementById("inf-lg").style.color="white";
        document.getElementById("inf-lg").style.opacity="1";
        document.getElementById("inf-rg").style.color="transparent";
        document.getElementById("inf-rg").style.opacity="0";
        document.getElementById("inf-rg").style.top="120px";
        

    }else{
    document.getElementById("lg-2").style.left="0px";
    document.getElementById("ti-lg").style.color="transparent";
    document.getElementById("ti-rg").style.color="white";
    document.getElementById("inf-lg").style.color="transparent";
    document.getElementById("inf-lg").style.opacity="0";
    document.getElementById("inf-rg").style.color="white";
    document.getElementById("inf-rg").style.opacity="1";
    document.getElementById("inf-rg").style.top="150px";

 }

}else{
    if(document.getElementById("lg-2").style.top=="0px"){
        document.getElementById("lg-2").style.top="260px";
        document.getElementById("ti-lg").style.color="white";
        document.getElementById("ti-rg").style.color="transparent";
        document.getElementById("inf-lg").style.color="white";
        document.getElementById("inf-lg").style.opacity="1";
        document.getElementById("inf-rg").style.color="transparent";
        document.getElementById("inf-rg").style.opacity="0";
        document.getElementById("inf-rg").style.top="120px";
    }else{
    document.getElementById("lg-2").style.top="0px";
    document.getElementById("ti-lg").style.color="transparent";
    document.getElementById("ti-rg").style.color="white";
    document.getElementById("inf-lg").style.color="transparent";
    document.getElementById("inf-lg").style.opacity="0";
    document.getElementById("inf-rg").style.color="white";
    document.getElementById("inf-rg").style.opacity="1";
    document.getElementById("inf-rg").style.top="150px";

 }
}
}




//termino de funcion de login y registro