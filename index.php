<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css?23">
    
    <title>LOGIN</title>
</head>

<?php include("menu.html"); ?>
<body>
<!--fondo de login-->
    <main>
        <video class="fondo" src="videos/IntroIndex.mp4" autoplay muted loop></video>
<!--termina fondo-->
<!--formulario para login y registro-->
    
        <div class="form">
            <h2 class="ti-re">REGISTRARSE</h2>
            <div class="login" id="lg-2">
               <h1 class="tl-lg" id="ti-lg">INICIAR SECCION</h1>
               <h1 class="tl-rg" id="ti-rg">REGISTRARSE</h1>
                <p class="inf-login" id="inf-lg">Si YA TIENES UNA CUENTA DALE CLICK AQUI ABAJO</p>
                <p class="inf-register" id="inf-rg">SI NO TIENES UNA CUENTA DALE CLICK AQUI ABAJO</p>
                <img src="menu/pulse-aqui.png" class="pulse" id="btn-4">
            
            </div>
            <form action="index.php" method="post" name="registrar" id="register">
                <input type="text" name="usuario" placeholder="INGRESA TU USUARIO" required>
                <input type="password" name="pass" placeholder="INGRESA CONTRASEÑA" required>
                <input  type="button"  value="REGISTRAR" name="registrar" action="index.php" onclick="valida_envia()">
            </form>
            <h2 class="lo-gin">INICIAR SECCION</h2>
            <form action="index.php" method="post" name="login" id="register">
                <input type="text" name="usuario" placeholder="INGRESA TU USUARIO" required>
                <input type="password" name="pass" placeholder="INGRESA CONTRASEÑA" required>
                <input  type="button"  value="INICIAR SESION" name="login" action="index.php" onclick="valida_envia()">
            </form>
        
        </div>
<!--termino de formulario-->
    </main>
    
    <script src="javascript/funciones.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<<<<<<< HEAD
    <!--  OLA-->
=======
    <!--HOLA-->
    
>>>>>>> e4ab42157c4afa31ff37cb314d55289a59841111
    
</body>
</html>