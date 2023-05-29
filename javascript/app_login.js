//llamamos la funcion del onclick
const validar_lg=async()=>{
    var user_lg=document.querySelector("#user-lg").value;
    var pass_lg=document.querySelector("#pass-lg").value;
if(user_lg.trim()==='' || pass_lg.trim()===''){
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'ICEL: LLENA TODOS LOS CAMPOS',
        background: 'rgb(89, 0, 255,0.8)',
        color: 'white'
    })

}

}  