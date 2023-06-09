<?php 
include("conexion.php");
session_start();
// aqui consultamos si hay una session inicia ya sea en el index o en login
if($_SESSION){
    //comparamos el nombre en la base de datos con la session iniciada
    $sql4="SELECT usuario, permiso From usuarios where usuario='$_SESSION[usuario]'";
$resultado=mysqli_query($conexion,$sql4);
if ($resultado->num_rows > 0) {
$fila = $resultado->fetch_assoc();
//aqui preguntamos que permiso tiene ese usuario y lo redirecionamos a la pagina segun su permiso
if($fila['permiso']==2){
   header("Location: indexadmin.php");
    exit;
   echo $fila['permiso'];
    }else if($fila['permiso']==1){
   header("Location: usuarios.php");
    exit;
    
}

}
 
}

?>