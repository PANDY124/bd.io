<?php
//esta funcion es para cerrar la session y te redirecionara al index
  session_start();

  session_unset();

  session_destroy();

  header('Location: /bd/index.php');
?>