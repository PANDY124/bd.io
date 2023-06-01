<?php 
include("conexion.php");
$valido_lg['success']=array('success' => false , 'mensaje'=> '');
if($_POST){
    $user_lg = $_POST['user-lg'];
    $pass_lg = $_POST['pass-lg'];
   
    $sql2="SELECT * FROM usuarios WHERE usuario = '$user_lg'";
    $resultados1 = mysqli_query($conexion,$sql2);
    $num2 = $resultados1->num_rows;
  
    if($num2 == 1){
        $sql4="SELECT pass, permiso From usuarios WHERE usuario='$user_lg'";
        $resultado=mysqli_query($conexion,$sql4);
        if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    $hash = $fila['pass'];
    $rol = $fila['permiso'];
        }
        if(password_verify($pass_lg,$hash)){
            if($rol==2){
                $valido_lg['success']='true';
                $valido_lg['mensaje']='admin';
            
            }else{
                $valido_lg['success']='true';
                $valido_lg['mensaje']='user';
                
            }
        }else{
            $valido_lg['success']='false';
            $valido_lg['mensaje']='LA CONTRASEÑA O USUARIO SON INCORRECTOS';
        }
}else{
    $valido_lg['success']='false';
    $valido_lg['mensaje']='EL USUARIO NO ESTA REGISTRADO';
}
}
echo json_encode($valido_lg);
?>