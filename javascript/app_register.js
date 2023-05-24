const validarg=async()=>{
    var user_rg=document.querySelector('#user').value;
    var pass_rg=document.querySelector('#pass').value;

    if(user_rg.trim()==='' || pass_rg.trim()===''){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'ICEL: LLENA TODOS LOS CAMPOS',
            background: 'rgb(89, 0, 255,0.8)',
            color: 'white'
        })

}

const datos =  new FormData();
datos.append('user',user_rg);
datos.append('pass',pass_rg);
var respuesta=await fetch("php/funciones.php",{
    method:'POST',
    body:datos
});

var resultado = await respuesta.json();

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

