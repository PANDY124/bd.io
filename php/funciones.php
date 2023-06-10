<?php 

include("conexion.php");
$valido['success']=array('success' => false , 'mensaje'=> '');
//preguntamos si resivimos datos del metodo post dej archivo app_register
if($_POST){
    $user = $_POST['user'];
    $pas = password_hash($_POST['pass'], algo: PASSWORD_DEFAULT);
    //consulta sql oara ver si existe ese usuario
    $sql = "SELECT * FROM usuarios WHERE usuario='$user'";
    $result = mysqli_query($conexion,$sql);
    $n=$result->num_rows;
    //aqui se pregunta si la consulta no me da ningun dato que sea igual al usuario ingresado
    //me va insertar un nuevo usuario
    if($n == 0){
        $sqlinsertar = "INSERT INTO usuarios (usuario,pass,permiso)VALUES('$user','$pas','1')";
        if(mysqli_query($conexion,$sqlinsertar)===true){
            //aqui usamos la varible valido para regresar datos al archivo de javascript y asi dar las alertas
            $valido['success']='true';
            $valido['mensaje']='TE HAS REGISTRADO CORRECTAMENTE';
        }else{
            $valido['success']='false';
            $valido['mensaje']='EL USUARIO YA ESTA EN USO';
        }


    }else{
        $valido['success']='false';
        $valido['mensaje']='EL USUARIO YA ESTA EN USO';
    }
}else{
    $valido['success']='false';
    $valido['mensaje']='no se guardo';
}
//este comando sirve para ya enviar los dato al javascript
echo json_encode($valido);
?>
