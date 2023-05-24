<?php 

include("conexion.php");
$valido['success']=array('success' => false , 'mensaje'=> '');

if($_POST){
    $user = $_POST['user'];
    $pas = password_hash($_POST['pass'], algo: PASSWORD_DEFAULT);
    $sql = "SELECT * FROM usuarios WHERE usuario='$user'";
    $result = mysqli_query($conexion,$sql);
    $n=$result->num_rows;
    if($n == 0){
        $sqlinsertar = "INSERT INTO usuarios (usuario,pass,permiso)VALUES('$user','$pas','user')";
        if(mysqli_query($conexion,$sqlinsertar)===true){
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
echo json_encode($valido);
?>
