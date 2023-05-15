<?php 

include("php/conexion.php");
if(isset($_POST['registrar'])){
$nombre = $_POST['usuario'];
$pass = $_POST['pass'];
$password = password_hash($pass, algo: PASSWORD_DEFAULT);
$consulta = "INSERT INTO usuarios(usuario,pass,permiso) VALUES('$nombre','$password','admin')";
$sql = mysqli_query($conexion,$consulta);
if($sql){
    
    echo "<script>alert('se registro correctamente'); </script>";  
}else{
     echo "<script>alert('no se registro correctamente');</script>";
}

}

?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>