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
        $sqlinsertar = "INSERT INTO usuarios (usuario,pass,permiso)VALUES('$user','$pas','admin')";
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
<?php 
$valido_lg['success']=array('success' => false , 'mensaje'=> '');
if($_POST){
    $user_lg = $_POST['user-lg'];
    $pass_lg = $_POST['pass-lg'];
    
}

?>