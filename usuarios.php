<?php 
//se incluye la verificacion
include("php/verify_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css?232">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11?12"></script>
    <title>Biblioteca Digital</title>
</head>
<?php
include("menus/menu_admin.html");
?>
<body>
<!--alerta de bienvenida-->
<script>
   Swal.fire({
    icon: 'success',
    title: '!EXITOSAMENTE!',
    text: 'BIENVENIDO <?php echo $_SESSION['usuario']; ?> ',
    background: 'rgb(89, 0, 255,0.8)',
    color: 'white'
            }) </script> 
    
    <a href="php/close.php">salir</a>
 
</body>
</html>