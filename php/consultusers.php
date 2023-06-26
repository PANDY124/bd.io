<?php 
// se incluye la conexion
include("conexion.php");
//creamos variable de salida para podermo utilizar como respuesta de java
$salida="";
// aqui hacemos una consulta sql en un orden por id
$consulta1="SELECT * FROM usuarios ORDER BY id";
//aqui preguntamos si nos llego algun valor desde el archivo java por el metodo post
if(isset($_POST['consulta'])){
    //aqui convertimos el valor del metodo post lo vuelve en string para poder usarlo en consultas sql
    $q= $conexion->real_escape_string($_POST['consulta']);
    //aqui sustituimos la primera consulta esta consulta es la que hara la consulta dinamica
    $consulta1= "SELECT id, usuario, permiso FROM usuarios WHERE usuario LIKE '%".$q."%' OR permiso LIKE '%".$q."%' OR  id LIKE '%".$q."%'";

}
//aqui guardamos la variable resultado de la consulta nueva de cosulta1 para la caja de texto
$resultado = $conexion->query($consulta1);
//aqui preguntamos si la consulta tiene contenido en su tabla o sea si el contenido es mayor a 0
if($resultado->num_rows > 0){
    //en caso que si tenga contenido 
    //en la varible salida es la que nos redigira al js para hacer la funcion 
    //y se guarda todo el html de la tabla que se va mostrar 
    $salida.="<table class='datos1'>
    <tr>
        <td>id</td>
        <td>usuario</td>
        <td>permiso</td>
        <td>modificar permisos</td>
        <td>modificar password</td>
        <td>eliminar</td>
    </tr>";
//aqui hacemos un while para pedir todos los datos de la base de datos    
while($fila=$resultado->fetch_assoc()){    
    $salida.=" <tr>
    <td>".$fila['id']."</td>
    <td>".$fila['usuario']."</td>
    <td>".$fila['permiso']."</td>
    <td><img src='iconos/editar.png' class='edit'></td>
    <td><img src='iconos/contrasena.png' id='editcontra' class='edit'></td>
    <td><img src='iconos/borrar.png' class='edit' onclick='eliminar(".$fila['id'].")'></td>
</tr>";
}
//aqui terminanos y cerramos la etiqueta de table
$salida.="</table>";
}else{
    //en caso que no encuentre datos la varible salida va ser igual a este mensaje
    $salida.=" <p class='datos'>NO HAY DATOS QUE MOSTRAR</p>";
}
//para enviar el valor de salida lo hacemos con un echo 
echo $salida;
?>