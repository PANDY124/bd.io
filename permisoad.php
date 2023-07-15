<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <?php 
    //se incluye el menu y la consulta a la base de datos de la tabla usuarios
    include("menus/menu_admin.html");
    include("php/consultusers.php");
    include("php/consul.php");
    ?>
    <link rel="stylesheet" href="estilos.css?241">
</head>
<body>
<main class="fondo">
<div class="info">
    <img src="iconos/informacion.png" class="inf" id="infos">
    <script>
        document.getElementById("infos").addEventListener("click",informacion);
        var btn = document.getElementById("infos");
        function informacion(){
            Swal.fire({
        icon: 'info',
        title: 'INFORMACION DE PERMISOS',
        html: "2=ADMINISTRADOR <br> 1=USUARIO", 
        background: 'rgb(89, 0, 255,0.8)',
        color: 'white'
    })
        }
    </script>
</div>
    <h1>ADMINISTRAR LOS USUARIOS</h1><BR>
<!--esta parte es la tabla de la base de datos -->
    <input type="text"  id="buscar" placeholder="BUSCADOR: INGRESA EL USUARIO QUE DESEA MODIFICAR" name="buscador">
   
<div id="datos" class="tabla">
</div>
<!--AQUI TERMINA LA TABLA-->
</div>
</main>
</body>
 <!--este script nos permitirar pasar datos en ajax-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="javascript/busqueda.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script src="javascript/delete.js?23"></script>
 <script src="javascript/pass_mody.js?623"></script>
 
</html>