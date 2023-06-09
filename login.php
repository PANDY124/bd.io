
<?php 
//se incluye la verificacion de session
include("php/verifylg.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css?13">
    
    <title>LOGIN</title>
</head>

<?php 
//menu 
include("menus/menu.html"); 
?>

<body>

    <main>

<!--formulario para login y registro-->
<div class="cont-formulario">
<div class="ir-login" id="ir-lg">
    <h1 class="titulo-lg" name="lg"> INICIAR SESION </h1>
    <p class="info-lg" name="in-lg">SI YA TIENES UNA CUENTA DALE CLICK AQUI ABAJO</p>
    <img class="boton" src="menu/pulse-aqui.png" id="btn-login">
</div>
<div class="ir-registrar" id="ir-rg">
    <h1 class="titulo-lg"> REGISTRAR </h1>
    <p class="info-lg">SI NO TIENES UNA CUENTA DALE CLICK AQUI ABAJO</p>
    <img class="boton" src="menu/pulse-aqui.png" id="btn-register">
</div>
<div class="registrar-form" id="fr-rg">
    <h1 class="registrar-titu">REGISTRAR</h1>
    <input type="text" id="user" placeholder="INGRESA TU USUARIO">
    <input type="password" id="pass" placeholder="INGRESA TU PASSWORD">
    <input type="button" value="REGISTRAR" onclick="validarg()">
</div>

<div class="login-form" id="fr-lg">
    <h1 class="login-titu">INICIAR SESION</h1>
    <input type="text" id="user-lg" placeholder="INGRESA TU USUARIO">
    <input type="password" id="pass-lg" placeholder="INGRESA TU PASSWORD">
    <input type="button" value="LOGIN" onclick="validar_lg()">
</div>


</div>
<!--termino de formulario-->
    </main>
    <script src="javascript/app_login.js?45"></script>
    <script src="javascript/login-register.js?24"></script>
    <script src="javascript/app_register.js?23"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 
    
    
</body>
</html>