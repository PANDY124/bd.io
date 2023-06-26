<?php 
include("conexion.php");

$id=$_POST['id'];


$query= $conexion->query("DELETE FROM usuarios WHERE id=$id");

?>