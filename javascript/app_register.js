//llamamos la funcion del onclick y con la funcion async para poder recoger e enviar datos de php a js y
//viceversa
const validarg=async()=>{
    var user_rg=document.querySelector('#user').value;
    var pass_rg=document.querySelector('#pass').value;
//preguntamos que los campos no esten vacios
    if(user_rg.trim()==='' || pass_rg.trim()===''){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'ICEL: LLENA TODOS LOS CAMPOS',
            background: 'rgb(89, 0, 255,0.8)',
            color: 'white'
        })

}else{
//parte para insertar los datos a mysql
const datos =  new FormData();
datos.append('user',user_rg);
datos.append('pass',pass_rg);
var respuesta=await fetch("php/funciones.php",{
    method:'POST',
    body:datos
});
//recojemos los resultados de las consultas en php
var resultado = await respuesta.json();
//preguntamos si el resultado que arroja php es success o false
if(resultado.success=="true"){
    Swal.fire({
        icon: 'success',
        title: '!EXITOSAMENTE!',
        text: resultado.mensaje,
        background: 'rgb(89, 0, 255,0.8)',
        color: 'white'
    })

}else{
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: resultado.mensaje,
        background: 'rgb(89, 0, 255,0.8)',
        color: 'white'
    })
}
}
}

