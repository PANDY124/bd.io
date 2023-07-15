<?php
include("conexion.php");
/*declaramos variables*/
$pass = $_POST['pass'];
$npass = $_POST['newpass'];
$id = $_POST['codigo'];
//creamos array para la respuestas al js en tipo json
$cambio['success']=array('success' => false , 'mensaje'=> '');
//hacemos la consulta para la base de datos
$sql = "SELECT * FROM usuarios WHERE id = '".$id."'";
//ejecutamos la consulta
$result = mysqli_query($conexion,$sql);
//preguntamos si la consulta fue exitosa y tiene datos que mostrar
if($result -> num_rows > 0){
    //y guardamos los datos arrojados en la varible fila en un fetch assoc
    $fila = $result->fetch_assoc();
// aqui verifica la contraseña del usuaria al cual va cambiar la contraseña
if(password_verify($pass,$fila['pass'])){
    
    $cambio['success']='true';
    $cambio['mensaje']='SE CAMBIARON CORRECTAMENTE';
}else{
    $cambio['success']='false';
    $cambio['mensaje']='TU CONTRASEÑA ES INCORRECTA';
}
// Envía una respuesta al cliente (opcional)
}
echo json_encode($cambio);

?>
