<?php 
// esta parte es cuando esta iniciada una session y verifica si esta iniciada y si no que te mande a login
include("conexion.php");
session_start();
if(!$_SESSION){
    header("Location: login.php");
    exit;
}
 


?>