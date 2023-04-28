<?php
    session_start();
    $_SESSION["usuario"]="";
    session_destroy();
    echo " Su Sesion Ha Finalizado!";
    header("Location: index.php"); 
    
   ?>
    
  ?>